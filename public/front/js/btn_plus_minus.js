function incrementValue(e) {
    e.preventDefault();
    var fieldName = $(e.target).data("field");
    var parent = $(e.target).closest("div");
    var currentVal = parseInt(
        parent.find("input[name=" + fieldName + "]").val(),
        10
    );

    if (!isNaN(currentVal)) {
        parent.find("input[name=" + fieldName + "]").val(currentVal + 1);
    } else {
        parent.find("input[name=" + fieldName + "]").val(0);
    }
}

function decrementValue(e) {
    e.preventDefault();
    var fieldName = $(e.target).data("field");
    var parent = $(e.target).closest("div");
    var currentVal = parseInt(
        parent.find("input[name=" + fieldName + "]").val(),
        10
    );

    if (!isNaN(currentVal) && currentVal > 1) {
        parent.find("input[name=" + fieldName + "]").val(currentVal - 1);
    } else {
        parent.find("input[name=" + fieldName + "]").val(1);
    }
}

$(".input-group").on("click", ".button-plus", function(e) {
    incrementValue(e);
});

$(".input-group").on("click", ".button-minus", function(e) {
    decrementValue(e);
});
function formatRupiah(angka, prefix) {
    var number_string = angka.toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
    }

    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}
