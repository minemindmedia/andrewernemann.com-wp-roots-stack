<footer class=" pt-48 pb-16 bg-primary">
  <div class="text-center p-8">
    <p class="text-3xl text-white uppercase font-bold">{{ $work_with_us->heading }}</p>
    <p class="text-white text-2xl leading-normal mt-4">{{ $work_with_us->subheading }}</p>
    <p class="text-white text-2xl leading-normal mt-4 lg:w-2/5 mx-auto">{{ $work_with_us->content }}</p>
      <a class="contactModal_open inline-block py-3 px-8 mt-16 border border-white  uppercase text-lg text-white cursor-pointer">Contact us</a>
  </div>
  <div class="mt-16 xl:mt-48">
    <div class="relative w-full">
      <div class="w-80 mx-auto">
        <img data-src="{{ $footer_logos->l1['url'] }}" alt="{{ $footer_logos->l1['alt'] }}" class="lozad p-4 border border-white mb-8">
        <img data-src="{{ $footer_logos->l2['url'] }}" alt="{{ $footer_logos->l2['alt'] }}" class="lozad">
      </div>
      <div class="xl:absolute text-white text-center xl:text-left mt-16 xl:mt-0" style="right:12rem; top:0;">
        <p class="text-3xl mb-6">{{ $contact_details->phone }}</p>
        <a href="" class="contactModal_open block text-white uppercase no-underline text-3xl mb-6">Send an email</a>
        <p class="text-xl mb-6">{!! $contact_details->address !!}</p>
        <p class="text-lg mb-6">{!! $contact_details->copyright !!}</p>
        <a href="/privacy-policy" class="text-md text-white">Privacy Policy</a>
      </div>
    </div>
    <div class="mt-32 p-8 lg:p-0 lg:mx-48 ">
      <p class="text-white opacity-25 text-md lg:text-lg">{{ $fine_print->content }}</p>
    </div>
  </div>
</footer>
