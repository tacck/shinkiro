$(function () {
    var emap = L.map('eventmap').setView([43.20, 141.15], 10);
    var pmap = L.map('placesmap').setView([43.20, 141.15], 10);
    L.tileLayer('https://tile.mierune.co.jp/mierune/{z}/{x}/{y}.png', {
        attribution: "Maptiles by <a href='http://mierune.co.jp/' target='_blank'>MIERUNE</a>, under CC BY. Data by <a href='http://osm.org/copyright' target='_blank'>OpenStreetMap</a> contributors, under ODbL."
    }).addTo(emap);
    L.tileLayer('https://tile.mierune.co.jp/mierune/{z}/{x}/{y}.png', {
        attribution: "Maptiles by <a href='http://mierune.co.jp/' target='_blank'>MIERUNE</a>, under CC BY. Data by <a href='http://osm.org/copyright' target='_blank'>OpenStreetMap</a> contributors, under ODbL."
    }).addTo(pmap);


    $.getJSON("/attractions", function (data) {

        var d = data["result"]["data"];
        var l = d.length;
        var i = 0;
        for (i = 0; i < l; i++) {
            L.marker([d[i]["lat"], d[i]["lng"]]).addTo(pmap)
                .bindPopup(d[i]["properties"]["resourceName"])
                .openPopup();
        }
    });

    var setView = function (pointList) {
        var mirageViewPoint = new L.Polyline(pointList, {
            color: '#cc99ff',
            weight: 8,
            opacity: .7,
            smoothFactor: 1
        });
        mirageViewPoint.addTo(emap);
    }
    setView([new L.LatLng(43.15, 141.18), new L.LatLng(43.163, 141.22),
        new L.LatLng(43.185, 141.265)]);
});