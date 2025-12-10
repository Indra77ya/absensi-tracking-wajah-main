<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class EmployeeDataController extends Controller
{
    /**
     * Get active employees with face data for face recognition.
     *
     * This endpoint provides the necessary data for the frontend
     * face recognition library.
     *
     * @return JsonResponse
     */
    public function getFaceData(): JsonResponse
    {
        try {
            $employees = Employee::where('is_active', true)
                ->whereNotNull('face_data')
                ->get(['id', 'employee_id', 'name', 'face_data', 'photo']);

            return response()->json($employees);
        } catch (\Exception $e) {
            Log::error('Error fetching employee face data: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to fetch employee data'], 500);
        }
    }
}
