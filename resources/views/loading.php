<button id="button" type="button">Click</button>

<div class="box">
    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
</div>

<style>
    #button{
        display:block;
        margin:20px auto;
        padding:10px 30px;
        background-color:#eee;
        border:solid #ccc 1px;
        cursor: pointer;
    }
    #overlay{
        position: fixed;
        top: 50%;
        left: 50%;
        z-index: 100;
        width: 50%;
        height:50%;
        display: none;
        background: rgba(0,0,0,0.6);
    }

    .box {
        padding: 100px;
        margin: 300px;
        border: solid 3px #000000;
    }

    .cv-spinner {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .spinner {
        width: 40px;
        height: 40px;
        border: 4px #ddd solid;
        border-top: 4px #2e93e6 solid;
        border-radius: 50%;
        animation: sp-anime 0.8s infinite linear;
    }
    @keyframes sp-anime {
        100% {
            transform: rotate(360deg);
        }
    }
    .is-hide{
        display:none;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function(){
        $(document).ajaxSend(function() {
            $("#overlay").fadeIn(300);
        });

        $('#button').click(function(){
            $.ajax({
                type: 'GET',
                success: function(data){
                    console.log(data);
                }
            }).done(function() {
                setTimeout(function(){
                    $("#overlay").fadeOut(500);
                },500);
            });
        });
    });
</script>
