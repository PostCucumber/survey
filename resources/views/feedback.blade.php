<html>
    <head><title>SurveyBox</title></head>
    <body style="font-family:arial;">
        <div style="position:fixed;top:0px;left:0px;height:2rem;background:#222222;width:100%;padding-left:1rem;color:#ffffff;padding-top:1rem">SurveyBox</div>
        <div class="container" style="margin-left: auto;margin-right: auto;margin-top:8rem;width:80%;">
            <p style="text-align:center">{{ $question }} </p>
            <form method="post" action="/feedback/submit" accept-charset="UTF-8" style="width:auto">
                <input type="radio"  name="rating"  value="1" style="margin-left:auto;margin:right">😔
                <input type="radio"  name="rating"  value="2" style="margin-left:auto;margin:right">😕
                <input type="radio"  name="rating"  value="3" style="margin-left:auto;margin:right">😐
                <input type="radio"  name="rating"  value="4" style="margin-left:auto;margin:right">🙂
                <input type="radio"  name="rating"  value="5" style="margin-left:auto;margin:right">😃

                <input type="message" name="message" style="width:100%;font-size:2rem;padding:.5rem;">
                
                <input type="hidden" name="survey_id" value="{{ $survey_id }}" />
                <input type="hidden" name="sender"    value="{{ config('app.url') }}" />

                <button type="submit" style="width:100%;margin-top:.5rem;padding:1rem;margin-left:auto;margin-right:auto;background:#fec300;border:none" >
                    <span style="font-size:1.5rem;color:white;">Submit Answer</span>
                </button>
            </form>
        </div>
    </body>
</html>