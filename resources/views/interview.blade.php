@extends('layouts.app')

@section('content')

    <div class="container" id="into">
        <h2>ТЕСТ  <b> ЭМОЦИОНАЛЬНОГО САМОЧУВСТВИЯ</b></h2>
        <hr>
        <p>Тест поможет вам понять ваше эмоциональное состояние. <br>
            Тест не позволяет диагностировать, а также не дает медицинских оценок. <br>

            Чтобы получить соответствующие оценки, необходимо проконсультироваться с психиатром или клиническим психологом.

        </p>
        <h3>Количество прошедших тест: {{$count}}</h3>
        <a href="{{route('interview.msq')}}" class="btn btn-success">К ВОПРОСАМ</a>
        @foreach($all as $item)
            @if($item->user_id == Auth::user()->id)

                <div style="border: 1px solid #000; padding: 20px; margin-top: 30px">
                    <h2>Your Score: {{$item->score}}</h2>
                    @if($item->score > 22)
                        <p>Если вы набрали больше 22 баллов, то это может указывать на тревожный невроз. Генерализованный тревожный невроз проявляется в виде генерализованной, постоянной, так сказать, неустойчивой тревоги, которая существенно не связана с определенными ситуациями. Наиболее частыми жалобами являются тревога ожидания и чрезмерная озабоченность, нервозность, напряжение в мышцах, головная боль, вызванная напряжением, дрожь, усталость, слабость, сухость во рту и другие признаки чрезмерной активности вегетативной нервной системы, также человеку трудно расслабиться. Испытывать негативные чувства очень неприятно, однако они являются неотъемлемой частью жизни и необходимо учиться справляться с ними.</p>
                    @elseif($item->score > 16)
                        <p>Если вы набрали больше 16 баллов, то это может указывать на депрессию. В случае депрессии человек обычно страдает от сниженного настроения, потери интереса и жизнерадостности, уменьшения энергии, что в свою очередь приводит к повышенной усталости и снижению активности. Также люди могут ощущать снижение внимания и способности сосредоточиться, нарушение сна и изменение аппетита. Также можно испытывать чувство вины и неполноценности, заниженную самооценку и самоуверенность; человек может проявлять пессимизм и безнадежность в отношении будущего, может уменьшиться воля к жизни.</p>
                    @elseif($item->score > 12)
                        <p>Если вы набрали больше 12 баллов, то это может указывать на расстройства сна. Расстройства сна могут проявляться в трудностях с засыпанием, в беспокойном прерывистом сне и чрезмерно раннем пробуждении. Расстройства сна могут быть связаны со многими другими проблемами со здоровьем.</p>
                    @elseif($item->score > 12)
                        <p>Если вы набрали больше 10 баллов, то это может указывать на синдром усталости, в случае которого человек изнурен как физически, так и морально, и чувствует общую усталость, на которую существенно не может повлиять отдых. Характерно пониженное внимание и способность сосредоточиться, и даже после небольшого напряжения человек быстро устает.</p>
                    @elseif($item->score > 5)
                        <p>Если вы набрали больше 5 баллов, то это может указывать на социофобию. Социофобия связана со страхом находиться в центре внимания в составе маленькой группы. Зачастую социофобия связана также с низкой самооценкой и боязнью критики. В ситуациях, связанных с фобией, люди испытывают соматические симптомы тревоги, такие как, покраснение, дрожь в руках, тошноту или учащенное сердцебиение, которые приносят сильный дискомфорт, поэтому люди стараются избегать различных социальных ситуаций.</p>
                    @else
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero officiis quo unde. Ad animi cumque facilis natus vero. Aut culpa cumque doloremque, ducimus eius explicabo incidunt natus non nulla vitae?</p>
                    @endif
                </div>
            @endif
        @endforeach
    </div>

@endsection
