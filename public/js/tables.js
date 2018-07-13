$(document).ready( function () {
    var table = $('#products').DataTable( {
        ajax: {
            url: 'all/products'
            //dataSrc: 'data'
        },
        "columns": [
            { "data": function (data) {
                    return '<a href="occupational-health/'+data.id+'/edit">'+data.name+'</a>'
                }, className: "centre"
            },
            { "data": function (data) {
                    var url = data.image_url
                    return "<img src='" +url+ "' height='30' alt='" +data.name+ "'>"
                }, className: "centre"
            },
            { "data": "price" , className: "centre" },
            { "data": function (data) {
                    var visible = data.visible
                    if (visible == "1"){
                        return "Yes"
                    } else {
                        return "No"
                    }
                }, className: "centre"
            },
            { "data": function (data) {
                    var new_in = data.new_in
                    if (new_in == "1"){
                        return "Yes"
                    } else {
                        return "No"
                    }
                }, className: "centre"
            },

            { "data": function (data) {
                    return "<button onclick='delete_occupational_health_form("+data.id+")' type='submit' class='btn btn-danger'>Delete</button>"
                }, className: "centre"
            },
        ],
        //select: true
    } );

    var table = $('#insurance').DataTable( {
        ajax: {
            url: 'all/insurance'
            //dataSrc: 'data'
        },
        "columns": [
            { "data": function (data) {
                    return '<a href="insurance/'+data.id+'/edit">'+data.name+'</a>'
                }, className: "centre"
            },
            { "data": function (data) {
                    var url = data.image_url
                    return "<img src='" +url+ "' height='30' alt='" +data.name+ "'>"
                }, className: "centre"
            },
            { "data": "price" , className: "centre" },
            { "data": function (data) {
                    var visible = data.visible
                    if (visible == "1"){
                        return "Yes"
                    } else {
                        return "No"
                    }
                }, className: "centre"
            },
            { "data": function (data) {
                    var new_in = data.new_in
                    if (new_in == "1"){
                        return "Yes"
                    } else {
                        return "No"
                    }
                }, className: "centre"
            },
            { "data": function (data) {
                    return "<button onclick='delete_insurance_form("+data.id+")' type='submit' class='btn btn-danger'>Delete</button>"

                }, className: "centre"
            },
        ],
        //select: true
    } );

    var table = $('#music-app').DataTable( {
        ajax: {
            url: 'all/music-app'
            //dataSrc: 'data'
        },
        "columns": [
            { "data": function (data) {
                    return '<a href="music-app/'+data.id+'/edit">'+data.name+'</a>'
                }, className: "centre"
            },
            { "data": function (data) {
                    var url = data.image_url
                    return "<img src='" +url+ "' height='30' alt='" +data.name+ "'>"
                }, className: "centre"
            },
            { "data": "price" , className: "centre" },
            { "data": function (data) {
                    var visible = data.visible
                    if (visible == "1"){
                        return "Yes"
                    } else {
                        return "No"
                    }
                }, className: "centre"
            },
            { "data": function (data) {
                    var new_in = data.new_in
                    if (new_in == "1"){
                        return "Yes"
                    } else {
                        return "No"
                    }
                }, className: "centre"
            },
            { "data": function (data) {
                var id = data.id
                return "<button onclick='delete_music_app_form("+id+")' type='submit' class='btn btn-danger'>Delete</button>"
                }, className: "centre"
            },
        ],
        //select: true
    });
});

function delete_music_app_form(id) {
    $("#music-app-form").attr("action", '/admin/music-app/'+id).submit()
    console.log("deleted music id "+id+"")
}

function delete_insurance_form(id) {
    $("#insurance-form").attr("action", '/admin/insurance/'+id+'').submit()
    console.log("deleted insurance id "+id)
}

function delete_occupational_health_form(id) {
    $("#occupational_health-form").attr("action", '/admin/occupational-health/'+id+'').submit()
    console.log("deleted insurance id "+id)
}