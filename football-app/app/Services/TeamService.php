<?php

namespace App\Services;

use App\Models\Team;

class TeamService
{
    public function getAllTeams()
    {
        return Team::all();
    }
}