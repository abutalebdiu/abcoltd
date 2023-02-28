@section('js')

<script>

    const steps = Array.from(document.querySelectorAll("form .step"));
    const nextBtn = document.querySelectorAll("form .next-btn");
    const prevBtn = document.querySelectorAll("form .previous-btn");
    const form = document.querySelector("form");

    nextBtn.forEach((button) => {
        button.addEventListener("click", () => {
            changeStep("next");
        });
    });
    prevBtn.forEach((button) => {
        button.addEventListener("click", () => {
            changeStep("prev");
        });
    });


    function changeStep(btn) {
        let index = 0;
        const active = document.querySelector(".active");
        index = steps.indexOf(active);
        steps[index].classList.remove("active");


        if (btn === "next")
        {
            if(index === 0)
            {
                if($('#name').val() == '' || $('#father').val() == '' || $('#mother').val() == '' || $('#gender').val() == '' || $('#date').val() == '' || $('#occupation').val() == '' || $('#address').val() == '' || $('#city').val() == '' || $('#postal').val() == '' || $('#country').val() == '' || $('#mobile').val() == '' || $('#email').val() == '' || $('#nid').val() == '' || $('#nida').val() == '' || $('#photo').val() == '' || $('#sign').val() == '' || $('#sign').val() == '')
                {
                    alert('Field must not be empty');
                    index = 0;
                } else {
                    index++;
                }
            } else if(index === 1)
            {
                if($('#bank').val() == '' || $('#branch').val() == '' || $('#account').val() == '' || $('#routing').val() == '' || $('#cheque').val() == '')
                {
                    alert('Field must not be empty');
                    index = 1;
                } else {
                    index++;
                }
            } else if(index === 2)
            {
                index++;
            }
        }

        else if (btn === "prev") {
            index--;
        }

        steps[index].classList.add("active");

    }

    $( "#step-submit" ).click(function() {
        $( "#myform" ).submit();
    });

</script>
@endsection







