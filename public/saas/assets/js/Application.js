var Application = {


    notify: function(message,type){

        if(type == null){
            type = 'success';
        }

        $.notify({

            message: message
        },{
            allow_dismiss: true,
            type:  type,

            placement: {
                from: "top",
                align: "center"
            },

            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
        });

    },

    init: function(){

        this.newsletter();

    },

    newsletter: function(){

        $(document).on('submit','#newsletter-form', function(e){

            e.preventDefault();

            var form = $(this);

            $.ajaxSetup({
                header: $('meta[name="_token"]').attr('content')
            });

            $.ajax({
                type: "POST",
                url: $(form).attr('action'),
                data: $(form).serialize(),
                dataType: 'json',
                success: function (data) {

                    $.notify({

                        message: data.message
                    },{
                        allow_dismiss: true,
                        type:  data.status,

                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        },
                    });

                },
                error: function (data) {
                    console.log(data);
                }
            });
        });

    }

}

Application.init();