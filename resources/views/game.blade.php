<x-guest-layout>
    <div class="flex items-center justify-center w-screen h-screen overflow-hidden bg-no-repeat bg-cover" style="background-image: url('{{asset('bg.jpg')}}')">
        <div class="flex flex-col items-center justify-center my-12">
            <div class="flex items-center justify-center pt-10">
                <img class="w-32 h-32 md:w-64 md:h-64" src="{{asset('logo.png')}}">
            </div>
            <div id="winprompt" class="hidden py-2 text-center">
                <div class="flex flex-col items-center justify-center px-6">
                    <h1 class="text-xl font-extrabold text-yellow-300 uppercase md:text-6xl">Congratulations!</h1>
                    <p class="text-xs font-bold text-gray-900 md:text-lg"> Thank you again for partnering with Activation Machine!</p>
                </div>
            </div>
            <div id="loseprompt" class="hidden py-2 text-center">
                <div class="flex flex-col items-center justify-center px-6">
                    <h1 class="text-xl font-extrabold text-red-900 uppercase md:text-6xl">Sorry, game over!</h1>
                    <p class="text-xs font-bold text-gray-900 md:text-lg">We hope you enjoyed this simple game. Thank you again for partnering with Activation Machine.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-2 md:gap-10 lg:grid-cols-3">
                <div class="items-center justify-between">
                    <div id="card1" class="w-40 h-40 overflow-hidden bg-white border-white rounded-lg shadow-md lg:h-64 lg:w-64 border-6"></div>
                    <div class="hidden" id="card1-percent">&nbsp;</div>
                </div>
                <div class="items-center justify-between">
                    <div id="card2" class="w-40 h-40 overflow-hidden bg-white border-white rounded-lg shadow-md lg:h-64 lg:w-64 border-6"></div>
                    <div class="hidden" id="card2-percent">&nbsp;</div>
                </div>
                <div class="items-center justify-between">
                    <div id="card3" class="w-40 h-40 overflow-hidden bg-white border-white rounded-lg shadow-md lg:h-64 lg:w-64 border-6"></div>
                    <div class="hidden" id="card3-percent">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scratchpad.js')}}"></script>
    <script>
        // document.addEventListener('contextmenu', function(e) {
        //     e.preventDefault();
        // });

        var results = <?php echo $results; ?>;
        var scratch = [0,0,0];

        function CheckScratch()
        {
            if(!scratch.includes(0))
            {
                if(!results.includes(0)){
                    document.getElementById('winprompt').classList.remove('hidden');
                } else {
                    document.getElementById('loseprompt').classList.remove('hidden');
                }
            } 
        }

        if(results[0] == 1)
        {
            $('#card1').wScratchPad({
                bg: '../win.jpg',
                realtime: true,
                fg: '../cover.jpg',
                'cursor': 'url("../coin.png") 20 20, default',
                scratchMove: function(e, percent) {
                    $('#card1-percent').html(percent);
                    if (percent > 24) {
                        this.clear();
                        scratch[0] = 1;
                        CheckScratch();
                    }
                }
            });
        } else {
            $('#card1').wScratchPad({
                bg: '../lose.jpg',
                realtime: true,
                fg: '../cover.jpg',
                'cursor': 'url("../coin.png") 20 20, default',
                scratchMove: function(e, percent) {
                    $('#card1-percent').html(percent);
                    if (percent > 24) {
                        this.clear();
                        scratch[0] = 1;
                        CheckScratch();
                    }
                }
            });
        }

        if(results[1] == 1)
        {
            $('#card2').wScratchPad({
                bg: '../win.jpg',
                realtime: true,
                fg: '../cover.jpg',
                'cursor': 'url("../coin.png") 20 20, default',
                scratchMove: function(e, percent) {
                    $('#card2-percent').html(percent);
                    if (percent > 24) {
                        this.clear();
                        scratch[1] = 1;
                        CheckScratch();
                    }
                }
            });
        } else {
            $('#card2').wScratchPad({
                bg: '../lose.jpg',
                realtime: true,
                fg: '../cover.jpg',
                'cursor': 'url("../coin.png") 20 20, default',
                scratchMove: function(e, percent) {
                    $('#card2-percent').html(percent);
                    if (percent > 24) {
                        this.clear();
                        scratch[1] = 1;
                        CheckScratch();
                    }
                }
            });
        }

        if(results[2] == 1)
        {
            $('#card3').wScratchPad({
                bg: '../win.jpg',
                realtime: true,
                fg: '../cover.jpg',
                'cursor': 'url("../coin.png") 20 20, default',
                scratchMove: function(e, percent) {
                    $('#card3-percent').html(percent);
                    if (percent > 24) {
                        this.clear();
                        scratch[2] = 1;
                        CheckScratch();
                    }
                }
            });
        } else {
            $('#card3').wScratchPad({
                bg: '../lose.jpg',
                realtime: true,
                fg: '../cover.jpg',
                'cursor': 'url("../coin.png") 20 20, default',
                scratchMove: function(e, percent) {
                    $('#card3-percent').html(percent);
                    if (percent > 24) {
                        this.clear();
                        scratch[2] = 1;
                        CheckScratch();
                    }
                }
            });
        }

    </script>
</x-guest-layout>