<article <?php post_class('lg:w-1/2 px-4 lg:px-8 my-4 lg:my-8') ?>>
  @php $images = get_field('header_images') @endphp
    @if( $images )
      @php $image_1 = $images[0] @endphp
      <a href="<?php the_permalink(); ?>" class="relative">
        <div class="thumbnail-footer absolute w-full h-16 text-white bg-grey opacity-85">
          <p class="text-center text-sm lg:text-2xl text-white uppercase mt-6 lg:mt-4 ">
            <span>{{ $property_details->city }}</span>
            <span class="ml-4 pl-5">${{ $property_price->price }}</span>
            <span class="ml-4 pl-5 last">{{ $property_details->bedrooms }} Bedrooms</span>
          <img data-src="@asset('images/gallery-next.svg')" alt="Next Arrow" class="lozad">
          </p>
        </div>
        <img data-src="<?php echo $images[0]['sizes']['large']; ?>" alt="<?php echo $images[0]['alt']; ?>" style="width:100%;" class="lozad" />
      </a>
    @endif
</article>
