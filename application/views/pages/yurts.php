<title>Yurts</title>
      <div class="container">
        <img src="/pacific_ignite/assets/images/yurt.jpg" alt="Yurt">
        <article>
          <h2>The Yurts at Pacific Trails</h2>
            <fontblue class="fontblue">What is a yurt?</fontblue>
                    <blockquote>Our luxury yurts are permanent structures four feet off the ground. Each yurt has canvas walls, a wooden floor, and a roof dome that can be opened.
                    </blockquote>
            <fontblue class="fontblue">How are the yurts furnished?</fontblue>
                    <blockquote>Each yurt is furnished with a queen-size bed with down quilt and gas-fired stove. The luxury camping experience also includes electricity and a sink with hot and cold running water.Shower and restroom facilities are located in the lodge.</blockquote>
            <fontblue class="fontblue">What should I bring?</fontblue>
                    <blockquote>Bring a sense of adventure and some time to relax! Most guests also pack comfortable walking shoes and plan to dress for changing weather with layers of clothing.</blockquote>
            <fontblue class="fontblue"><h3>Yurt Packages</h3></fontblue>
              <yurtblock class="block">A variety of luxury yurt packages are available. Choose a package below and contact us to begin your reservation. We're happy to build a custom package just for you!</yurtblock>
        </article>
        <br>
        <div>
          <table class="yurtstable">
            <tr>
              <th><fontblue class="fontblue">Package Name</fontblue></th>
              <th><fontblue class="fontblue">Description</fontblue></th> 
              <th><fontblue class="fontblue">Nights</fontblue></th>
              <th><fontblue class="fontblue">Cost per Person</fontblue></th>
            </tr>
              <?php foreach($package as $packages) :
              	echo('<tr>');
              	echo('<td>');
              	echo $packages['pkgname'];
              	echo('</td>');
              	echo('<td>');
              	echo $packages['pkgdesc'];
              	echo('</td>');
              	echo('<td>');
              	echo $packages['nights'];
              	echo('</td>');
              	echo('<td>');
              	echo $packages['cost'];
              	echo('</td>');
              	echo('</tr>');
              endforeach; ?>
          </table> 
          <br>
        </div>