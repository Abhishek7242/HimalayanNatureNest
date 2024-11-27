@extends('../frontend/layouts/main')
@section('main-section')
    <style>
        #adminForm {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
            gap: 100px;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }

        form {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        #edit-form {
            background: #70e0ff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        form > div {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        select,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:focus,
        select:focus,
        input[type="file"]:focus {
            border-color: #ff7e5f;
            outline: none;
            box-shadow: 0px 0px 4px rgba(255, 126, 95, 0.5);
        }

        button {
            background: #ff7e5f;
            color: #fff;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #feb47b;
        }

        @media (max-width: 600px) {
            form {
                padding: 15px 20px;
            }

            h1 {
                font-size: 20px;
            }

            form > div {
                flex-direction: column;
                align-items: stretch;
            }

            form > div > div {
                flex: 1;
            }
        }
    </style>
<div id="adminForm">
    <form action="{{ route('submitTour') }}" method="POST" enctype="multipart/form-data">
        <h2 style="text-align: center;">Add Tour</h2>
        @csrf
        <h1>Submit Tour Package</h1>
<div style="display: flex; justify-content: space-between;">
    <div style="flex: 1; margin-right: 10px;">
        <label for="add-tourTitle">Tour Title:</label>
        <select name="tourTitle" id="add-tourTitle" required>
            <option value="" {{ old('tourTitle') == '' ? 'selected' : '' }}>Select a Tour</option>
            <option value="Himachal" {{ old('tourTitle') == 'Himachal' ? 'selected' : '' }}>Himachal</option>
            <option value="Rajasthan" {{ old('tourTitle') == 'Rajasthan' ? 'selected' : '' }}>Rajasthan</option>
            <option value="Kerala" {{ old('tourTitle') == 'Kerala' ? 'selected' : '' }}>Kerala</option>
            <option value="Spiti" {{ old('tourTitle') == 'Spiti' ? 'selected' : '' }}>Spiti</option>
            <option value="Leh" {{ old('tourTitle') == 'Leh' ? 'selected' : '' }}>Leh</option>
            <option value="Kashmir" {{ old('tourTitle') == 'Kashmir' ? 'selected' : '' }}>Kashmir</option>
            <option value="Goa" {{ old('tourTitle') == 'Goa' ? 'selected' : '' }}>Goa</option>
        </select>
    </div>

    <div style="flex: 1; margin-left: 10px;">
        <label for="add-tourCoverImage">Tour Cover Image:</label>
        <select name="tourCoverImage" id="add-tourCoverImage" required>
            <option value="" {{ old('tourCoverImage') == '' ? 'selected' : '' }}>Select a Cover Image</option>
            <option value="https://www.crazysexyfuntraveler.com/wp-content/uploads/2021/11/best-places-to-see-in-Himachal-Pradesh-Himalayas-6.jpg" {{ old('tourCoverImage') == 'https://www.crazysexyfuntraveler.com/wp-content/uploads/2021/11/best-places-to-see-in-Himachal-Pradesh-Himalayas-6.jpg' ? 'selected' : '' }}>Himachal</option>
            <option value="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/33/fc/f9/rajasthan.jpg?w=1400&h=1400&s=1" {{ old('tourCoverImage') == 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/33/fc/f9/rajasthan.jpg?w=1400&h=1400&s=1' ? 'selected' : '' }}>Rajasthan</option>
            <option value="https://www.squidtravelindia.com/uploads/tours/38e95ca2fc87e67624930fd828e45016.webp" {{ old('tourCoverImage') == 'https://www.squidtravelindia.com/uploads/tours/38e95ca2fc87e67624930fd828e45016.webp' ? 'selected' : '' }}>Kerala</option>
            <option value="https://media1.thrillophilia.com/filestore/wj8dbxi0gg8r5534vgjnlppl2z32_1577348017_shutterstock_1129297934_(1).jpg" {{ old('tourCoverImage') == 'https://media1.thrillophilia.com/filestore/wj8dbxi0gg8r5534vgjnlppl2z32_1577348017_shutterstock_1129297934_(1).jpg' ? 'selected' : '' }}>Spiti</option>
            <option value="https://www.holidify.com/images/bgImages/LADAKH.jpg" {{ old('tourCoverImage') == 'https://www.holidify.com/images/bgImages/LADAKH.jpg' ? 'selected' : '' }}>Leh</option>
            <option value="https://static.wanderon.in/wp-content/uploads/2024/09/best-places-to-visit-in-kashmir-in-may.jpg" {{ old('tourCoverImage') == 'https://static.wanderon.in/wp-content/uploads/2024/09/best-places-to-visit-in-kashmir-in-may.jpg' ? 'selected' : '' }}>Kashmir</option>
            <option value="https://www.tourindiawithdriver.com/UPLOAD/SLIDESHOW/298-visit-goa.jpg" {{ old('tourCoverImage') == 'https://www.tourindiawithdriver.com/UPLOAD/SLIDESHOW/298-visit-goa.jpg' ? 'selected' : '' }}>Goa</option>
        </select>
    </div>
    <div>
    <label for="add-offerPackage">Offer Package:</label>
    <select name="offerPackage" id="add-offerPackage" required>
        <option value="1" {{ old('offerPackage') == '1' ? 'selected' : '' }}>True</option>
        <option value="0" selected>False</option>
    </select>
</div>
</div>


        <div>
            <div style="flex: 1;">
                <label for="add-tourPackageTitle">Tour Package Title:</label>
                <input type="text" name="tourPackageTitle" id="add-tourPackageTitle" required>
            </div>
          <div style="flex: 1;">
    <label for="add-tourPackageImage">Tour Package Image URL:</label>
    <input type="url" name="tourPackageImage" id="add-tourPackageImage" required placeholder="Enter image URL" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; box-sizing: border-box; transition: border-color 0.3s ease;">
</div>

        </div>

        <div>
            <div style="flex: 1;">
                <label for="add-tourPackageDuration">Duration:</label>
                <input type="text" name="tourPackageDuration" id="add-tourPackageDuration" required>
            </div>
            <div style="flex: 1;">
                <label for="add-tourPackageRoute">Route:</label>
                <input type="text" name="tourPackageRoute" id="add-tourPackageRoute" required>
            </div>
        </div>

        <div>
            <div style="flex: 1;">
                <label for="add-tourPackageStartPoint">Start Point:</label>
                <input type="text" name="tourPackageStartPoint" id="add-tourPackageStartPoint" required>
            </div>
            <div style="flex: 1;">
                <label for="add-tourPackageEndPoint">End Point:</label>
                <input type="text" name="tourPackageEndPoint" id="add-tourPackageEndPoint" required>
            </div>
        </div>

      <div>
<div>

    <label for="add-packageTags">Package Tags:</label>
    <input type="text" name="packageTags" id="add-packageTags">
</div>


</div>
        <button type="submit">Submit</button>
    </form>













    <form id="edit-form" action="{{ route('updateTour', ['id' => 'ID_PLACEHOLDER']) }}" method="POST" enctype="multipart/form-data">
        @csrf
          @method('POST')
        <h2 style="text-align: center;">Edit Tour</h2>
        <h1>Submit Tour Package</h1>
<div style="display: flex; justify-content: space-between;">
    <div style="flex: 1; margin-right: 10px;">
        <label for="tourTitle">Tour Title:</label>
        <select name="tourTitle" id="tourTitle" required>
            <option value="" {{ old('tourTitle') == '' ? 'selected' : '' }}>Select a Tour</option>
            <option value="Himachal" {{ old('tourTitle') == 'Himachal' ? 'selected' : '' }}>Himachal</option>
            <option value="Rajasthan" {{ old('tourTitle') == 'Rajasthan' ? 'selected' : '' }}>Rajasthan</option>
            <option value="Kerala" {{ old('tourTitle') == 'Kerala' ? 'selected' : '' }}>Kerala</option>
            <option value="Spiti" {{ old('tourTitle') == 'Spiti' ? 'selected' : '' }}>Spiti</option>
            <option value="Leh" {{ old('tourTitle') == 'Leh' ? 'selected' : '' }}>Leh</option>
            <option value="Kashmir" {{ old('tourTitle') == 'Kashmir' ? 'selected' : '' }}>Kashmir</option>
            <option value="Goa" {{ old('tourTitle') == 'Goa' ? 'selected' : '' }}>Goa</option>
        </select>
    </div>

    <div style="flex: 1; margin-left: 10px;">
        <label for="tourCoverImage">Tour Cover Image:</label>
        <select name="tourCoverImage" id="tourCoverImage" required>
            <option value="" {{ old('tourCoverImage') == '' ? 'selected' : '' }}>Select a Cover Image</option>
            <option value="https://devotionalpoint.com/wp-content/uploads/2024/03/20.jpg" {{ old('tourCoverImage') == 'https://devotionalpoint.com/wp-content/uploads/2024/03/20.jpg' ? 'selected' : '' }}>Himachal</option>
            <option value="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/33/fc/f9/rajasthan.jpg?w=1400&h=1400&s=1" {{ old('tourCoverImage') == 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/33/fc/f9/rajasthan.jpg?w=1400&h=1400&s=1' ? 'selected' : '' }}>Rajasthan</option>
            <option value="https://www.squidtravelindia.com/uploads/tours/38e95ca2fc87e67624930fd828e45016.webp" {{ old('tourCoverImage') == 'https://www.squidtravelindia.com/uploads/tours/38e95ca2fc87e67624930fd828e45016.webp' ? 'selected' : '' }}>Kerala</option>
            <option value="https://media1.thrillophilia.com/filestore/wj8dbxi0gg8r5534vgjnlppl2z32_1577348017_shutterstock_1129297934_(1).jpg" {{ old('tourCoverImage') == 'https://media1.thrillophilia.com/filestore/wj8dbxi0gg8r5534vgjnlppl2z32_1577348017_shutterstock_1129297934_(1).jpg' ? 'selected' : '' }}>Spiti</option>
            <option value="https://www.holidify.com/images/bgImages/LADAKH.jpg" {{ old('tourCoverImage') == 'https://www.holidify.com/images/bgImages/LADAKH.jpg' ? 'selected' : '' }}>Leh</option>
            <option value="https://static.wanderon.in/wp-content/uploads/2024/09/best-places-to-visit-in-kashmir-in-may.jpg" {{ old('tourCoverImage') == 'https://static.wanderon.in/wp-content/uploads/2024/09/best-places-to-visit-in-kashmir-in-may.jpg' ? 'selected' : '' }}>Kashmir</option>
            <option value="https://www.tourindiawithdriver.com/UPLOAD/SLIDESHOW/298-visit-goa.jpg" {{ old('tourCoverImage') == 'https://www.tourindiawithdriver.com/UPLOAD/SLIDESHOW/298-visit-goa.jpg' ? 'selected' : '' }}>Goa</option>
        </select>
    </div>
    <div>
    <label for="offerPackage">Offer Package:</label>
    <select name="offerPackage" id="offerPackage" required>
        <option value="1" {{ old('offerPackage') == '1' ? 'selected' : '' }}>True</option>
        <option value="0" selected>False</option>
    </select>
</div>
</div>


        <div>
            <div style="flex: 1;">
                <label for="tourPackageTitle">Tour Package Title:</label>
                <input type="text" name="tourPackageTitle" id="tourPackageTitle" required>
            </div>
          <div style="flex: 1;">
    <label for="tourPackageImage">Tour Package Image URL:</label>
    <input type="url" name="tourPackageImage" id="tourPackageImage" required placeholder="Enter image URL" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; box-sizing: border-box; transition: border-color 0.3s ease;">
</div>

        </div>

        <div>
            <div style="flex: 1;">
                <label for="tourPackageDuration">Duration:</label>
                <input type="text" name="tourPackageDuration" id="tourPackageDuration" required>
            </div>
            <div style="flex: 1;">
                <label for="tourPackageRoute">Route:</label>
                <input type="text" name="tourPackageRoute" id="tourPackageRoute" required>
            </div>
        </div>

        <div>
            <div style="flex: 1;">
                <label for="tourPackageStartPoint">Start Point:</label>
                <input type="text" name="tourPackageStartPoint" id="tourPackageStartPoint" required>
            </div>
            <div style="flex: 1;">
                <label for="tourPackageEndPoint">End Point:</label>
                <input type="text" name="tourPackageEndPoint" id="tourPackageEndPoint" required>
            </div>
        </div>

      <div>
<div>

    <label for="packageTags">Package Tags:</label>
    <input type="text" name="packageTags" id="packageTags">
</div>


</div>
        <button type="submit">Submit</button>
    </form>


</div>
    <div id="offer-package-section" style="width:100%; display:flex; flex-wrap:wrap;">
<h2 style="width: 100%">Offer Packages</h2>

@foreach($AllPackages as $package)
    <div style="width:30%;" onclick="getValues(event,'{{$package->tourDetails_id}}','{{$package->tourTitle}}', '{{$package->tourPackageTitle}}', '{{$package->tourPackageImage}}', '{{$package->tourPackageDuration}}', '{{$package->tourPackageRoute}}', '{{$package->tourPackageStartPoint}}', '{{$package->tourPackageEndPoint}}', '{{$package->tourCoverImage}}', '{{$package->packageTags}}', '{{$package->offerPackage}}')">
        <x-offer-packages 
            offerTitle='{{$package->tourPackageTitle}}' 
            offerDayNight='{{$package->tourPackageDuration}}' 
            offerImage='{{$package->tourPackageImage}}' 
            tourTitle='{{$package->tourTitle}}' 
        />
    </div>
@endforeach

</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const tourTitle = document.getElementById("tourTitle");
    const tourCoverImage = document.getElementById("tourCoverImage");

    // Restore previous values
    if (localStorage.getItem("tourTitle")) {
        tourTitle.value = localStorage.getItem("tourTitle");
    }
    if (localStorage.getItem("tourCoverImage")) {
        tourCoverImage.value = localStorage.getItem("tourCoverImage");
    }

    // Save current values on change
    tourTitle.addEventListener("change", function () {
        localStorage.setItem("tourTitle", tourTitle.value);
        console.log('ass')
    });
    tourCoverImage.addEventListener("change", function () {
        localStorage.setItem("tourCoverImage", tourCoverImage.value);
        console.log('ass')

    });
});


function getValues(event, tourId, tourTitleValue, tourPackageTitleValue, tourPackageImageValue, tourPackageDurationValue, tourPackageRouteValue, tourPackageStartPointValue, tourPackageEndPointValue, tourCoverImageValue, packageTagsValue, offerPackageValue) {
    // Prevent the form from submitting
    event.preventDefault();

    // Stop the event from bubbling up to parent elements
    event.stopPropagation();

    // Get the form by its ID
    let editForm = document.getElementById("edit-form");
  editForm.action = editForm.action.replace('ID_PLACEHOLDER', tourId);
    // Set the values in your form fields using the provided values
    editForm.querySelector("#tourTitle").value = tourTitleValue;
    editForm.querySelector("#tourCoverImage").value = tourCoverImageValue;
    editForm.querySelector("#offerPackage").value = offerPackageValue;
    editForm.querySelector("#tourPackageTitle").value = tourPackageTitleValue;
    editForm.querySelector("#tourPackageImage").value = tourPackageImageValue;
    editForm.querySelector("#tourPackageDuration").value = tourPackageDurationValue;
    editForm.querySelector("#tourPackageRoute").value = tourPackageRouteValue;
    editForm.querySelector("#tourPackageStartPoint").value = tourPackageStartPointValue;
    editForm.querySelector("#tourPackageEndPoint").value = tourPackageEndPointValue;
    editForm.querySelector("#packageTags").value = packageTagsValue;

    // Optional: Log the values for debugging purposes
    console.log(tourTitleValue, tourPackageTitleValue, tourPackageImageValue, tourPackageDurationValue, tourPackageRouteValue, tourPackageStartPointValue, tourPackageEndPointValue, tourCoverImageValue, packageTagsValue, offerPackageValue);
}

</script>
@endsection
