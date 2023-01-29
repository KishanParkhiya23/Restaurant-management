
function deleteRecord(data, token, type) {
    swal({
        title: `Are you sure you want to delete this record?`,
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            let id = data.id;
            
            if (type == 1) {
                type = "breakfast";
            } else if (type == 2) {
                type = "lunch";
            } else if (type == 3) {
                type = "dinner";
            } else if (type == 4) {
                type = "drinks";
            } else if (type == 5) {
                type = "desserts";
            } else {
                type = "wine";
            }

            $.ajax({
                type: 'DELETE',
                url: `/admin/menu/delete/food/${data.id}`,
                data: {
                    "id": id,
                    "_token": token
                },
                success: function (response) {
                    location.replace('/admin/menu/' + type);
                }
            })
        }
    });
}