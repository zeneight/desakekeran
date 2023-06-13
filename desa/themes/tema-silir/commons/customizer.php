<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $enable_customizer = false; ?>

<?php 
  $colorScheme = [
    [
      'hex'=> '#519259',
      'name'=> 'emerald-green'
    ],
    [
      'hex'=> '#0ea5e9',
      'name'=> 'blue-sky'
    ],
    [
      'hex'=> '#bf4342',
      'name'=> 'spirit-red'
    ],
    [
      'hex'=> '#2a9d8f',
      'name'=> 'teal-wise'
    ],
    [
      'hex'=> IS_RAMADHAN ? '#eee' : '#0077B6',
      'name'=> IS_RAMADHAN ? 'ramadhan': 'navy-blue'
    ],
    [
      'hex'=> '#825ab8',
      'name'=> 'pale-indigo'
    ],
    [
      'hex'=> '#ff6d00',
      'name'=> 'fruity-orange'
    ],
    [
      'hex'=> '#735751',
      'name'=> 'dark-brown'
    ],
    [
      'hex'=> '#656d4a',
      'name'=> 'midnight-green'
    ]
  ];
?>

<?php if($enable_customizer) : ?>
  <script>
    function changeColorScheme(themeName) {
      console.log(themeName)
      if (themeName) {
        localStorage.setItem('colorScheme', themeName);
        document.body.setAttribute('data-theme', themeName);
      }
    }
  </script>

  <div 
    class="fixed right-0 top-1/2 transform -translate-y-1/2 theme-switcher z-30 flex flex-col items-end" 
    x-data="{customizerOpen: false}"
    @click.away="customizerOpen = false">
    <div 
      class="h-12 w-12 items-center justify-center rounded-tl-xl rounded-bl-xl shadow bg-orange-500 text-white relative cursor-pointer opacity-70 hover:opacity-100"
      @click="customizerOpen = !customizerOpen"
      :class="{'hidden': customizerOpen, 'flex': !customizerOpen}"
      x-transition>
      <i class="ti ti-settings inline animate-spin"></i>
    </div>
    <div 
      class="relative grid grid-cols-3 gap-0.5 shadow-xl transition duration-300  bg-white rounded-tl-lg rounded-bl-lg transform border border-r-0"
      :class="{'translate-x-full opacity-0 w-0 h-0': !customizerOpen, 'translate-x-0 p-3 opacity-100 w-auto h-auto': customizerOpen}">
      <?php foreach($colorScheme as $color) : ?>
        <span class="<?= "bg-[{$color['hex']}]" ?> w-10 h-10 inline-block cursor-pointer" data-value="<?= $color['name'] ?>" @click="() => {customizerOpen = false; ; changeColorScheme('<?= $color['name'] ?>')}">
        <?php if($color['name'] === 'ramadhan') : ?>
          <svg class="w-full h-auto px-0.5 py-0.5" width="52" height="51" viewBox="0 0 52 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38.6269 36.0243C38.6269 36.3803 38.9883 36.6216 39.3124 36.4742C44.807 33.9753 49.0796 29.1675 50.9576 23.2525C51.1298 22.7098 51.9643 22.7582 51.9837 23.3272C51.9946 23.6431 52 23.9604 52 24.279C52 38.998 40.3594 50.9301 26 50.9301C11.6406 50.9301 0 38.998 0 24.279C0 13.5268 6.21178 4.26183 15.1575 0.0489075C15.6687 -0.191841 16.0883 0.513621 15.6908 0.915183C11.7661 4.87954 9.33329 10.3905 9.33329 16.4837C9.33329 22.6606 11.8335 28.2391 15.8534 32.2147C16.1604 32.5183 16.6667 32.2945 16.6667 31.8627V15.8283C16.6667 15.2761 17.1144 14.8283 17.6667 14.8283H21.6667C22.219 14.8283 22.6667 15.2761 22.6667 15.8283V36.421C22.6667 36.6231 22.7882 36.8059 22.9761 36.8803C23.3351 37.0226 23.6988 37.1551 24.0669 37.2777C24.3842 37.3834 24.7063 37.1433 24.7063 36.8088V24.5884C24.7063 23.4838 25.6018 22.5884 26.7063 22.5884H36.6269C37.7315 22.5884 38.6269 23.4838 38.6269 24.5884V36.0243ZM33.5787 38.1419C33.8219 38.1079 34 37.8981 34 37.6525V34.4334C34 34.1319 33.864 33.8465 33.6298 33.6566C33.6298 33.6566 33.6298 33.6566 33.6298 33.6566L32.1298 32.4406C32.1298 32.4406 32.1298 32.4406 32.1298 32.4406C31.7627 32.143 31.2374 32.143 30.8703 32.4406C30.8703 32.4406 30.8703 32.4406 30.8703 32.4406L29.3703 33.6566C29.3703 33.6566 29.3703 33.6566 29.3703 33.6566C29.1361 33.8465 29 34.1319 29 34.4334V37.8162C29 38.077 29.2005 38.2947 29.4609 38.3095C29.86 38.3323 30.262 38.3439 30.6666 38.3439C31.6544 38.3439 32.6266 38.2751 33.5787 38.1419Z" fill="#2EAF71"/>
            <path d="M20.9767 13.5918C20.9767 13.592 20.9765 13.5918 20.9767 13.5918C21.9524 13.5547 22.6221 13.3322 22.6221 12.243C22.6221 11.4918 22.0243 11.0621 21.3577 10.5829C20.8603 10.2254 20.3243 9.84006 19.9697 9.27322C19.8577 9.0942 19.4311 9.0942 19.3191 9.27322C18.9645 9.84007 18.4285 10.2254 17.9311 10.5829C17.2645 11.0621 16.6667 11.4918 16.6667 12.243C16.6667 13.3224 17.3245 13.5506 18.2859 13.5908C18.2926 13.5911 18.2994 13.5912 18.3062 13.5912H19.5796H19.5808C19.5806 13.5912 19.581 13.5912 19.5808 13.5912L19.6439 13.5912C19.6436 13.5912 19.6443 13.5912 19.6439 13.5912L19.7076 13.5912C19.7074 13.5912 19.7077 13.5912 19.7076 13.5912H19.7092L20.9767 13.5918Z" fill="#d1ac11"/>
            <path d="M38.5745 19.4812C38.4714 19.3816 38.4345 19.2331 38.4655 19.0932C38.5261 18.8198 38.5576 18.5112 38.5576 18.1632C38.5576 16.4799 37.1743 15.5171 35.6313 14.4432C34.5164 13.6673 33.3182 12.8333 32.4983 11.6275C32.2037 11.1942 31.1299 11.1942 30.8353 11.6275C30.0154 12.8333 28.8171 13.6673 27.7023 14.4432C26.1593 15.5171 24.776 16.4799 24.776 18.1632C24.776 18.5109 24.8075 18.8192 24.868 19.0925C24.899 19.2327 24.862 19.3814 24.7588 19.4812C24.7588 19.4811 24.7588 19.4812 24.7588 19.4812C24.1118 20.1059 24.5541 21.2005 25.4534 21.2005H37.8798C38.7792 21.2005 39.2214 20.1059 38.5745 19.4812C38.5744 19.4812 38.5745 19.4812 38.5745 19.4812Z" fill="#d1ac11"/>
        <?php endif ?>
      </span>
      <?php endforeach ?>
    </div>
  </div>
<?php endif ?>