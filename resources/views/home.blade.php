<html>
    <head><title>SurveyBox</title></head>
    <body style="font-family:arial;">
        <div style="position:fixed;top:0px;left:0px;height:2rem;background:#222222;width:100%;padding-left:1rem;color:#ffffff;padding-top:1rem">
            <span>SurveyBox</span>
            <a href="/survey/1/feedback"><button type="submit" style="position:fixed;right:0px;top:0px;height:3rem;width:16rem;padding:.5rem;background:#fec300;border:none" >
                <span style="font-size:1rem;color:white;">Respond</span>
            </button></a>
        </div>
        <div class="container" style="margin-left: auto;margin-right: auto;margin-top:8rem;width:80%;">
            <form method="get" action="/submit" accept-charset="UTF-8">
                <input type="question" name="question" style="width:100%;font-size:2rem;border:1px solid #222222;padding:.5rem;">
                <button type="submit" style="width:100%;margin-top:.5rem;padding:1rem;margin-left:auto;margin-right:auto;background:#222222;border:none" >
                    <span style="font-size:1.5rem;color:white;">Add Survey Question</span>
                </button>
            </form>


        </div>
    </body>
</html>