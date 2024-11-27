<?php

namespace App\Http\Controllers;

use App\Models\OfferPackage;
use App\Models\TourDetail;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function submitTour(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'tourTitle' => 'required|string',
            'tourPackageTitle' => 'required|string|max:255',
            'tourPackageImage' => 'required',
            'tourPackageDuration' => 'required|string',
            'tourPackageRoute' => 'required|string',
            'tourPackageStartPoint' => 'required|string',
            'tourPackageEndPoint' => 'required|string',
            'tourCoverImage' => 'required|string',
            'packageTags' => 'nullable|string',
            'offerPackage' => 'required', // Validates it is 0 or 1
        ]);

        // Handle file upload and other logic if needed (e.g., storing images)

        // Add additional logic to handle images if necessary
        // Save data to the database using mass assignment
        TourDetail::create($validated);

        return back()->with('success', 'Tour Package Submitted Successfully!');
    }
    public function updateTour(Request $request, $id)
    {
        // Validate incoming data
        $validated = $request->validate([
            'tourTitle' => 'required|string',
            'tourPackageTitle' => 'required|string|max:255',
            'tourPackageImage' => 'required',
            'tourPackageDuration' => 'required|string',
            'tourPackageRoute' => 'required|string',
            'tourPackageStartPoint' => 'required|string',
            'tourPackageEndPoint' => 'required|string',
            'tourCoverImage' => 'required|string',
            'packageTags' => 'nullable|string',
            'offerPackage' => 'required|boolean', // Ensuring that offerPackage is 0 or 1
        ]);

        // Find the existing tour record by ID
        $tour = TourDetail::findOrFail($id);

        // Update the tour with the validated data
        $tour->update($validated);

        // Optional: Handle file upload if necessary (e.g., storing images)

        return back()->with('success', 'Tour Package Updated Successfully!');
    }


}

