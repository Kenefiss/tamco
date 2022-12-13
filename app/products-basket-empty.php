<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Tamlite || Products Basket</title>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>
      <!-- Basket Banner small -->
      <div class="section">
        <div class="banner-entry small">
          <div class="banner-entry-bg" style="background-image: linear-gradient(180.08deg, #193768 13.09%, #03132D 219.65%);"></div>
          <div class="banner-entry-content">
            <div class="banner-entry-align align-bottom text-center">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-sm-11">
                    <h1 class="h1 title white text-upper">Product Basket</h1>
                    <div class="h3 white fw-300">
                      Enim urna, orci facilisi libero, dictum rutrum cum. Tincidunt amet, vel sit scelerisque ac molestie in arcu.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="spacer-sm"></div>
      </div>

      <!-- Basket -->
      <div class="section basket-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-11">
              <div class="empty__basket">
                <div class="empty__basket--title h2">No Products</div>
                <div class="empty__basket--info h3">
                  Your product basket is empty. Products will show up here.
                </div>
                <a class="btn btn-2 btn-fourth" href="products-category.php">
                  <b>Add Products</b>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-md"></div>
      </div>


    </main>

    <?php include 'inc/_footer.php';?>
  </div>



  <div class="popup-wrapper">
    <?php include 'inc/_popups.php';?>
  </div>

  <?php include 'inc/_bottom.php';?>
</body>

</html>