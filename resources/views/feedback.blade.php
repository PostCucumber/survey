<html>
    <head><title>Survey</title></head>
    <body style="font-family:arial;">
        <div style="position:fixed;top:0px;left:0px;height:2rem;background:#222222;width:100%;padding-left:1rem;color:#ffffff;padding-top:1rem">SurveyBox</div>
        <div class="container" style="margin-left: auto;margin-right: auto;margin-top:8rem;width:80%;">
            <p style="text-align:center">{{ $question }} </p>
            <form method="get" action="/feedback/submit" accept-charset="UTF-8" style="width:auto">
                    <input type="radio"  name="response"  value="" style="margin-left:auto;margin:right">yes
                    <input type="radio"  name="response"  value="" style="margin-left:auto;margin:right">no
                    <input type="hidden" name="survey_id" value="{{ $survey_id }}" />
                <button type="submit" style="width:100%;margin-top:.5rem;padding:1rem;margin-left:auto;margin-right:auto;background:#fec300;border:none" >
                    <span style="font-size:1.5rem;color:white;">Submit Answer</span>
                </button>
            </form>
        </div>
    </body>
</html>