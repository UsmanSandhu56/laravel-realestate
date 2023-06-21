<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    function AgentDashboard(){
        return view('agent.agent_dashboard');
    }
}
