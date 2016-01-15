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
                        <h1>Dear Powerball Winner: Take Our Advice and Take the Annuity</h1>
                        <p>So let us suppose, reader, that you have won Wednesday's $1.5 billion Powerball jackpot. Congratulations! You have some important decisions to make, such as what <a href="http://www.nytimes.com/2016/01/12/business/dealbook/billionaires-who-trip-on-their-toys.html">ailing magazine to acquire</a> and what congressional seat your spouse should run for. But first, you must choose whether to take the prize as an annuity paid over 30 years, or a lump-sum payment right now.</p>
                        <p>If I'm reading you right, you should probably take the annuity.</p>
                        <p>First, some background: You might not realize this, but the top prize in the $1.5 billion Powerball is not actually $1.5 billion. (Nor is it $999 million, as many of the three-digit-readout lottery signs around the country say it is.) If you take the prize as a one-time cash payment, you will get a mere $930 million, before taxes.</p>
                        <p>If you want $1.5 billion, you'll have to take it in installments over the next 30 years. That's a long time, and so most people take the cash, according to Kelly Cripe, a Powerball spokeswoman. But I think most of them are making a mistake, for the following reasons.</p>
                        <p>First, while people associate the term "annuity" with payment streams that end when you die, the Powerball prize is actually what actuaries call an annuity certain: a stream of annual payments, every year from now until 2045, regardless of what happens to you. If you die before 2045, the future payments become part of your estate, like any other asset.</p>
                        <p>Second, there are big tax advantages to the annuity. The main one is that taking the annuity is basically like letting the government hold onto part of your prize for a while and invest it for you — and the government does not pay tax on investment income. Of course, once you get the annuity checks, you'll have to pay income tax on them. But if you take the lump-sum cash prize, you'll pay tax twice: on the prize when you win it, and on the income you get by investing it.</p>
                        <p>This adds up. If you invested all your prize money in the same way Powerball does (essentially by putting it in government bonds), you'd end up with 20 percent more cash in 2045 if you took the annuity option rather than the cash option, thanks to the tax savings. You could shave that difference by picking a different investment strategy with better tax management, but you'll never beat the effective tax rate of zero on the investment income earned inside the Powerball annuity.</p>
                        <p>On the other hand, there is a potential tax disadvantage with the annuity. If you die before it's finished paying out, you can leave the future payments to your heirs, but the I.R.S. will want to collect <a href="http://topics.nytimes.com/your-money/planning/estate-planning/index.html?inline=nyt-classifier" title="More articles about estate planning." class="meta-classifier">estate tax</a> right away on those payments' future value. If you die shortly after getting the prize, you won't have nearly enough cash on hand to satisfy the taxes due.</p>
                        <p>Powerball's website proposes a simple solution to this: If you die, Powerball can convert your annuity into a cash lump sum, so you can pay estate tax. However, it can only do that if it's legal in the state where you bought the ticket. Texas, for example, has a law authorizing such conversions; New York does not. If your state won't allow it, and you have reason to believe your life expectancy may be short, that is a strong argument for taking the lump sum.</p>
                        <p>Taxes aside, you'll probably quibble with the <em>pretax</em> rate of return on the Powerball annuity. Effectively, it's like investing in bonds that pay 2.843 percent interest. But that's actually a good deal for an ultrasafe investment in today's ultralow interest rate environment, said Allison Schrager, a financial economist with expertise in <a href="http://topics.nytimes.com/your-money/retirement/annuities/index.html?inline=nyt-classifier" title="More articles about annuities." class="meta-classifier">annuities</a>.</p>
                        <p>Ms. Schrager noted that you'd pay big fees to an <a href="http://topics.nytimes.com/your-money/insurance/index.html?inline=nyt-classifier" title="More articles about insurance." class="meta-classifier">insurance</a> company to build the same investment that Powerball is offering you, and because of those fees your effective interest rate would be even lower than 2.843 percent. As annuities go, this one is structured very favorably.</p>
                        <p>But what if you don't want an <em>ultrasafe</em> investment? I don't know all about your risk preferences, but I do know you buy lottery tickets. So maybe you'd prefer to take the cash option and gamble in the stock market for a higher average return. Or maybe you have a brilliant business idea ready to go and all you've been waiting for is the several hundred million dollars in investment capital you need to make it happen. Or maybe you want to buy the biggest house in the Hamptons, and the $22.6 million first-year annuity payment isn't big enough to do that. If you want to go any of those routes, you'll have to take the cash option.</p>
                        <p>But this leads us to the biggest advantage of the annuity: protecting you from yourself.</p>
                        <p>Again, I don't know all about you, but I do know you buy lottery tickets, so let's consider the possibility that you are not one of your generation's great financial minds. We all know the stories of people who win huge fortunes in the lottery and then lose them. The great thing about the annuity is, no matter what stupid choices you make this year, you'll have an enormous check waiting for you next year - all the way until 2045.</p>
                        <p>The big advantage of the cash prize is flexibility, but let's not underrate the value of the annuity's <em>inflexibility</em>. Your Powerball win is likely to bring a lot of long-lost friends and relatives out of the woodwork with stories about why they need money. Being able to tell them that this year's check is only for $22.6 million, and that's really not very much after taxes and the new mansion and the summer house and the cars and the boats and the new political magazine, will help you conserve your fortune.</p>
                        <p>As a Powerball winner, you've already done way better than you could reasonably have expected with your investment strategy. Don't press your luck. Take the annuity.</p>
                    </div>
                    <div class="row">
                        <button class='btn stop-timer-btn hidden'>Stop</button>
                        <div class="questions hidden">
                            {!! Form::open(array('url' => 'validate', 'method' => 'POST')) !!}
                            {!! Form::hidden('time', null, ['id' => 'time']) !!}
                            {!! Form::hidden('words', null, ['id' => 'words']) !!}
                            <ol>
                                <li> Between annuity and lump sum, which has a larger total payout? <br/>
                                    <div class="answers checkbox">
                                        {!!  Form::radio('answer1', 'a') !!} a. Annuity <br/>
                                        {!!  Form::radio('answer1', 'b') !!} b. Lump <br/>
                                        {!!  Form::radio('answer1', 'c') !!} c. Neither <br/>
                                    </div>
                                </li>
                                <li>If you were to take annuity payments, what investment percent interest could you expect to make? <br/>
                                    <div class="answers checkbox">
                                        {!!  Form::radio('answer1', 'a') !!} a. 1.54% <br/>
                                        {!!  Form::radio('answer1', 'b') !!} b. 3.10% <br/>
                                        {!!  Form::radio('answer1', 'c') !!} c. 2.84% <br/>
                                        {!!  Form::radio('answer1', 'd') !!} d. 2.27% <br/>
                                        {!!  Form::radio('answer1', 'e') !!} e. None <br/>
                                    </div>
                                </li>
                                <li>Can annuity payments be converted to a lump sum to cover estate tax if you die? <br/>
                                    <div class="answers checkbox">
                                        {!!  Form::radio('answer1', 'a') !!} a. Yes <br/>
                                        {!!  Form::radio('answer1', 'b') !!} b. No <br/>
                                        {!!  Form::radio('answer1', 'c') !!} c. Both <br/>
                                    </div>
                                </li>
                                <li>If you die, and you are receiving annuity payments, will your heirs be required to handle the estate taxes? <br/>
                                    <div class="answers checkbox">
                                        {!!  Form::radio('answer1', 'a') !!} a. Yes <br/>
                                        {!!  Form::radio('answer1', 'b') !!} b. No <br/>
                                        {!!  Form::radio('answer1', 'c') !!} c. Maybe <br/>
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