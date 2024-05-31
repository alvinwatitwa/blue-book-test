<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Priority;
use App\Models\Status;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('Dashboard/Index', [
                'todos' => Todo::with('status', 'priority')->get(),
                'statuses' => Status::all(),
                'priorities' => Priority::all(),
                'counts' => $this->statusCounts(),
                'auth' => Auth::user()
        ]);
    }

    private function statusCounts() {
        $todosCount = Todo::select('status_id', DB::raw('count(*) as count'))
        ->groupBy('status_id')
        ->get();

        // Retrieve status names
        $statusNames = Status::whereIn('id', $todosCount->pluck('status_id'))
            ->pluck('name', 'id');

        // Initialize the result array
        $result = [];

        // Populate the result array with counts and dynamic column names
        foreach ($todosCount as $count) {
            $statusName = $statusNames[$count->status_id];
            $columnName = 'count_' . strtolower(str_replace(' ', '_', $statusName));
            $result[$columnName] = $count->count;
        }

        // Convert result array to an object if needed
        $result = (object) $result;

        // Return or use the result as needed
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
