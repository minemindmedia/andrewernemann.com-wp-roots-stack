<article <?php post_class('lg:w-1/2 px-4 lg:px-8 my-4 lg:my-8') ?>>
  @php $images = get_field('header_images') @endphp
    @if( $images )
      @php $image_1 = $images[0] @endphp
      <a href="<?php the_permalink(); ?>" class="relative">
        <div class="thumbnail-footer absolute w-full h-16 text-white bg-grey opacity-85">
          <p class="text-center text-2xl text-white uppercase mt-4 ">
            <span>{{ $property_details->city }}</span>
            <span class="ml-4 pl-5">{{ $property_price->price }}</span>
            <span class="ml-4 pl-5 last">{{ $property_details->bedrooms }} Bedrooms</span>
          <img src="@asset('images/gallery-next.svg')" alt="Next Arrow">
          </p>
        </div>
        <img src="<?php echo $images[0]['sizes']['large']; ?>" alt="<?php echo $images[0]['alt']; ?>" style="width:100%;" />
      </a>
    @endif
</article>
