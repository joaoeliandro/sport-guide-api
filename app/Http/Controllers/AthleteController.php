<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Athlete;

class AthleteController extends Controller
{
    public function create(Request $request)
    {
        $athletes = new Athlete;
        $athletes->name = $request->name;
        $athletes->country = $request->country;
        $athletes->sport = $request->sport;
        $athletes->medal = $request->medal;
        $athletes->save();

        return response()->json([
            "message" => "Athlete record created"
        ], 201);
    }

    public function index()
    {
        $athletes = Athlete::get()->toJson(JSON_PRETTY_PRINT);

        return response($athletes, 200);
    }

    public function show($id)
    {
        if (Athlete::where('id', $id)->exists()) {
            $athlete = Athlete::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);

            return response($athlete, 200);
        } else {
            return response()->json([
                "message" => "Athlete not found"
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        if (Athlete::where('id', $id)->exists()) {
            $athlete = Athlete::find($id);

            $athlete->name = is_null($request->name) ? $athlete->name : $athlete->name;
            $athlete->country = is_null($request->country) ? $athlete->country : $athlete->country;
            $athlete->sport = is_null($request->sport) ? $athlete->sport : $athlete->sport;
            $athlete->medal = is_null($request->medal) ? $athlete->medal : $athlete->medal;
            $athlete->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Athlete not found"
            ], 404);
        }
    }

    public function delete($id)
    {
        if (Athlete::where('id', $id)->exists()) {
            $athlete = Athlete::find($id);
            $athlete->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Athlete not found"
            ], 404);
        }
    }
}
