@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class='row'>
                        <div class='col-md-3'>
                            <input type='text' name='timer' id="timer" class='form-control timer' placeholder='00:00:00' />
                        </div>
                        <div class='col-md-9'>
                            <button class='btn btn-success start-timer-btn'>Start</button>
                            <button class='btn btn-success resume-timer-btn hidden'>Resume</button>
                            <button class='btn pause-timer-btn hidden'>Pause</button>
                            <button class='btn btn-danger remove-timer-btn hidden'>Remove Timer</button>
                        </div>
                    </div>
                    <div class="row" id="article-content">
                        <h1>The White House Is Joining With Genius to Annotate History</h1>
                        <p>President Obama still has a year left in his presidency, but it seems members of his administration, past and present, already are getting a bit nostalgic.</p>
                        <p>In honor of the president's final State of the Union address on Tuesday, the White House has asked President Obama's former staffers to add context to past speeches using the online annotation platform Genius. The notes, on the <a href="https://www.whitehouse.gov/sotu#279321" target="_blank">White House's website</a> now, feature anecdotes such as what it was like for Jon Favreau to stare down a blank computer screen before writing the president's first State of the Union address. While the contributions will be heavily curated, members of the public are encouraged to add annotations as well.</p>
                        <p>The goal of this unusual partnership, says White House digital director Jason Goldman, is to "meet people where they are."</p>
                        <p>"Americans generally have a broad media diet," Goldman says. "We thought of Genius as an ideal platform to add additional color and additional content to the State of the Union from previous years."</p>
                        <h3>Twitter Is Table Stakes</h3>
                        <p>This is the first time the White House has used Genius, but it's far from the first time the Obama administration has used digital platforms like Genius to spread its message. Regardless of how you feel about the president's politics, there's no doubt his campaigns and his presidency have forever changed how&nbsp;politicians and their teams are expected to communicate with the public.</p>
                        <p>Back in 2008, the fact that Obama campaigned on Twitter seemed revolutionary. Today, it's table stakes. During his time in office, campaigns have adopted Obama's digital strategy as a model. The more the public comes to expect that model, the harder his&nbsp;team has to work to find new and surprising outlets to share the administration's message.</p>
                        <p>In the process, the Obama administration has radically changed the art of political spin. Obama has <a href="http://www.wired.com/2015/09/president-obama-takes-white-houses-instagram/" target="_blank">hosted</a> Instagram takeovers to discuss&nbsp;climate change. On a Funny or Die <a href="https://youtu.be/UnW3xkHxIEQ" target="_blank" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;https://youtu.be/UnW3xkHxIEQ_1&quot;;return this.s_oc?this.s_oc(e):true">episode</a> of <em>Between Two Ferns</em> with Zach Galifianakis, he pumped Healthcare.gov. In 2012, he hosted an "<a href="https://www.reddit.com/comments/z1c9z/i_am_barack_obama_president_of_the_united_states/" target="_blank" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;https://www.reddit.com/comments/z1c9z/i_am_barack_obama_president_of_the_united_states/_1&quot;;return this.s_oc?this.s_oc(e):true">Ask Me Anything</a>" session on Reddit, where he laid out his thoughts on college affordability, super-PACs, and Internet freedom. And just a few weeks ago, he&nbsp;<a href="http://comediansincarsgettingcoffee.com/president-barack-obama-just-tell-him-you-re-the-president" target="_blank" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;http://comediansincarsgettingcoffee.com/president-barack-obama-just-tell-him-you-re-the-president_1&quot;;return this.s_oc?this.s_oc(e):true">rode with Jerry Seinfeld</a>&nbsp;for an episode of <em>Comedians in Cars Getting Coffee</em>, talking about, well, nothing. (It's Seinfeld.)</p>
                        <p>Not all of these efforts to try something new work (may we remind you of the Iran Deal Twitter handle and its ill-advised <a href="http://www.wired.com/2015/08/iran-deal-twitter-compton/" target="_blank">attempt</a> to co-opt a <em>Straight Out of Compton</em> meme). Still, whether we're cringing or nodding along, as far as the administration is concerned, at least we're paying attention. When these tactics are working at their best, we forget altogether we're being spoon-fed a stump speech.</p>
                        <p>According to Goldman, this year's State of the Union will differ from years past, because the president will not be focusing on specific policy proposals for the next year but on major issues the country will face in the future. "We thought that looking back and taking a closer look at the previous seven years' speeches will be a great context for setting up the speech this year," he says.</p>
                        <p><em>If you're curious about what's been going on behind the scenes of this year's address, annotations for Tuesday's State of the Union will be online shortly afterward.</em></p>
                    </div>
                    <div class="row">
                        <button class='btn stop-timer-btn hidden'>Stop</button>
                        <div class="questions hidden">
                            {!! Form::open(array('url' => 'validate', 'method' => 'POST')) !!}
                            {!! Form::hidden('time', null, ['id' => 'time']) !!}
                            {!! Form::hidden('words', null, ['id' => 'words']) !!}
                            <ol>
                                <li>Question 1 <br/>
                                    <div class="answers checkbox">
                                        {!!  Form::radio('answer1', 1) !!} Answer 1 <br/>
                                        {!!  Form::radio('answer1', 2) !!} Answer 2 <br/>
                                        {!!  Form::radio('answer1', 3) !!} Answer 3 <br/>
                                        {!!  Form::radio('answer1', 4) !!} Answer 4 <br/>
                                    </div>
                                </li>
                                <li>Question 2 <br/>
                                    <div class="answers checkbox">
                                        {!!  Form::radio('answer2', 1) !!} Answer 1 <br/>
                                        {!!  Form::radio('answer2', 2) !!} Answer 2 <br/>
                                        {!!  Form::radio('answer2', 3) !!} Answer 3 <br/>
                                        {!!  Form::radio('answer2', 4) !!} Answer 4 <br/>
                                    </div>
                                </li>
                                <li>Question 3 <br/>
                                    <div class="answers checkbox">
                                        {!!  Form::radio('answer3', 1) !!} Answer 1 <br/>
                                        {!!  Form::radio('answer3', 2) !!} Answer 2 <br/>
                                        {!!  Form::radio('answer3', 3) !!} Answer 3 <br/>
                                        {!!  Form::radio('answer3', 4) !!} Answer 4 <br/>
                                    </div>
                                </li>
                            </ol>
                                {!!  Form::submit('Submit', ['class'=> 'btn']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-js')
<script src="/js/countable.js" type="text/javascript"></script>
<script src="/js/timer.jquery.js" type="text/javascript"></script>
<script>
    $('document').ready(function() {
        var area = document.getElementById('article-content')
        var minute = 0;
        var words = 0;
        Countable.once(area, function (counter) {
            $("#words").val(counter.words);
        });

//            $('#timer').timer({
//                format: '%h:%m:%s',
//            });
//
//            $('#btn_start').on('click', function() {
//                console.log('start', this);
//                $('#timer').timer('resume');
//            });
//
//            $('#btn_stop').on('click', function() {
//                $('#timer').timer('pause');
//                //todo compute
//
//            });

        var hasTimer = false;
        // Init timer start
        $('.start-timer-btn').on('click', function() {
            hasTimer = true;
            $('.timer').timer({
                format: '%H:%M:%S',
                editable: false
            });
            $(this).addClass('hidden');
            $('.pause-timer-btn, .remove-timer-btn, .stop-timer-btn').removeClass('hidden');
        });

        // Init timer resume
        $('.resume-timer-btn').on('click', function() {
            $('.timer').timer('resume');
            $(this).addClass('hidden');
            $('.pause-timer-btn, .remove-timer-btn').removeClass('hidden');
        });


        // Init timer pause
        $('.pause-timer-btn').on('click', function() {
            $('.timer').timer('pause');
            $(this).addClass('hidden');
            $('.resume-timer-btn').removeClass('hidden');
            minute = parseInt($('#timer').data('seconds')) / 60;
            $("#time").val(minute);
            var readtime = words / minute;
            alert('Total words: '+ words + '\nTotal minutes : '+ minute + '\nReadTime: ' + readtime );
        });

        $('.stop-timer-btn').on('click', function() {
            $('.timer').timer('pause');
            $(this).addClass('hidden');
            $('.resume-timer-btn, .questions').removeClass('hidden');
            minute = parseInt($('#timer').data('seconds')) / 60;
            $("#time").val(minute);
        });

        // Remove timer
        $('.remove-timer-btn').on('click', function() {
            hasTimer = false;
            $('.timer').timer('remove');
            $(this).addClass('hidden');
            $('.start-timer-btn').removeClass('hidden');
            $('.pause-timer-btn, .resume-timer-btn').addClass('hidden');
        });

        // Additional focus event for this demo
        $('.timer').on('focus', function() {
            if(hasTimer) {
                $('.pause-timer-btn').addClass('hidden');
                $('.resume-timer-btn').removeClass('hidden');
            }
        });

        // Additional blur event for this demo
        $('.timer').on('blur', function() {
            if(hasTimer) {
                $('.pause-timer-btn').removeClass('hidden');
                $('.resume-timer-btn').addClass('hidden');
            }
        });
    });
</script>
@endsection