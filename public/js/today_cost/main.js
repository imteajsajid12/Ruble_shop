
    $(document).ready(function() {
        $(document).on('click', '.editbtn', function() {
            var id = $(this).closest('tr').attr('id');
            console.log(id);
            axios.get(`/admin/today_cost/${id}/edit`)
                .then((res) => {
                    console.log(res.data);
                    let value = res.data;
                    $("input[id='name']").val(value.name);
                    $("input[id='taka']").val(value.taka);
                    $("#today_cost").attr("action", "/admin/today_cost/" + id);
                })
        });
    });

