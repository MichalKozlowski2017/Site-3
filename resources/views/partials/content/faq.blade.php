
@php
  $title = get_sub_field('title');
  $questions = get_sub_field('questions');
@endphp
<section class="faq">
  <div class="content-container">
    <div class="content-title">
      <h2>
        {!! $title !!}
      </h2>
    </div>

    <div class="faq-wrapper">
      @foreach ($questions as $question)
        <div class="faq-wrapper-elem">
          <div class="faq-wrapper-elem__question">
            {!! $question['question'] !!}
            <i class="fa fa-plus faq-plus" aria-hidden="true"></i>
          </div>
          <div class="faq-wrapper-elem__answer">
            {!! $question['answer'] !!}
          </div>

        </div>
      @endforeach
    </div>
  </div>
</section>
