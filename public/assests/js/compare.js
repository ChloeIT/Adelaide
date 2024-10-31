(function ($) {
    "use strict";

    function loadCompareList() {
        var compareList = JSON.parse(localStorage.getItem("compareList")) || [];
        $("#compareContainer").empty();
        compareList.forEach(function (hotel) {
            addHotelCard(
                hotel.id,
                hotel.name,
                hotel.rating,
                hotel.image,
                hotel.price,
                hotel.address
            );
        });
    }

    function saveCompareList() {
        var compareList = [];
        $("#compareContainer .compare-card").each(function () {
            var hotelId = $(this).data("hotel-id");
            var hotelName = $(this).find("h5").text();
            var hotelRating = $(this).find("p").eq(0).text().split(": ")[1];
            var hotelImage = $(this).find("img").attr("src");

            compareList.push({
                id: hotelId,
                name: hotelName,
                rating: hotelRating,
                image: hotelImage,
            });
        });
        localStorage.setItem("compareList", JSON.stringify(compareList));
    }

    function addHotelToCompare(
        hotelId,
        hotelName,
        hotelRating,
        hotelImage,
        hotelPrice,
        hotelAddress
    ) {
        var compareList = JSON.parse(localStorage.getItem("compareList")) || [];
        var hotelExists = compareList.some(function (hotel) {
            return hotel.id === hotelId;
        });

        if (hotelExists) {
            toastr.warning("Khách sạn này đã được thêm vào danh sách so sánh.");
            return;
        }

        addHotelCard(
            hotelId,
            hotelName,
            hotelRating,
            hotelImage,
            hotelPrice,
            hotelAddress
        );
        compareList.push({
            id: hotelId,
            name: hotelName,
            rating: hotelRating,
            image: hotelImage,
            price: hotelPrice,
            address: hotelAddress,
        });
        localStorage.setItem("compareList", JSON.stringify(compareList));
        toastr.success(`Đã thêm ${hotelName} vào danh sách so sánh.`);
    }
    function addHotelCard(
        hotelId,
        hotelName,
        hotelRating,
        hotelImage,
        hotelPrice,
        hotelAddress
    ) {
        console.log(hotelAddress);
        var image = hotelImage.startsWith("images")
            ? hotelImage
            : "images/" + hotelImage;
        var card = `<div class="col-md-4 compare-card" data-hotel-id='${hotelId}'>
        <span class="remove-from-compare hover:cursor-pointer p-2"  >&times;</span>
            <h5>${hotelName}</h5>
            <h5>${hotelPrice}$/night</h5>
            <h5>Address: ${hotelAddress}</h5>
            <img class="img-fluid" src="http://localhost:8000/assests/${image}" alt="">'
        </div>`;
        $("#compareContainer").append(card);
    }

    $(document).ready(function () {
        loadCompareList();

        $(".add-to-compare").on("click", function () {
            var hotelId = $(this).data("hotel-id");
            var hotelName = $(this).data("hotel-name");
            var hotelRating = $(this).data("hotel-rating");
            var hotelImage = $(this).data("hotel-image");
            var hotelPrice = $(this).data("hotel-price");
            var hotelAddress = $(this).data("hotel-address");

            addHotelToCompare(
                hotelId,
                hotelName,
                hotelRating,
                hotelImage,
                hotelPrice,
                hotelAddress
            );
        });

        $(document).on("click", ".remove-from-compare", function () {
            $(this).closest(".compare-card").remove();
            saveCompareList();
            toastr.info("Đã xóa khỏi danh sách so sánh.");
        });
    });
})(jQuery);
