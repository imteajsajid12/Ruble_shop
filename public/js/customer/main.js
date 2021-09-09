
    $(document).ready(function() {
        $(document).on('click', '.editbtn', function() {
            var id = $(this).closest('tr').attr('id');
            console.log(id);
            axios.get(`/admin/customer/${id}/edit`)
                .then((res) => {
                    console.log(res.data);
                    let value = res.data;
                    $("input[id='name']").val(value.name);
                    $("input[id='phone']").val(value.phone);
                    $("input[id='email").val(value.email);
                    $("input[id='address']").val(value.address);
                    $("#customer").attr("action", "/admin/customer/" + id);

                })
        });

    });
