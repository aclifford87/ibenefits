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
                    return "<form method='post' action='/admin/occupational-health/" + data.id + "'>" +
                        "<input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'>" +
                        "<input name=\"_method\" type=\"hidden\" value=\"DELETE\">" +
                        "<button type='submit' class='btn btn-danger'>Delete</button>" +
                        "</form>"
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
                    return "<form method='post' action='/admin/insurance/" + data.id + "'>" +
                        "<input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'>" +
                        "<input name=\"_method\" type=\"hidden\" value=\"DELETE\">" +
                        "<button type='submit' class='btn btn-danger'>Delete</button>" +
                        "</form>"
                }, className: "centre"
            },
        ],
        //select: true
    } );
} )