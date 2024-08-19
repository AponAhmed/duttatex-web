<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DuttaTex</title>
  
  <!-- cdn link for tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

  <!-- cdn link for ionicons icon -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" />


  <!-- cdn link for jquery -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- cdn link for font-awesome icon -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  

  @if(request()->is('/subcategory'))
      <!-- subcategory -->
      <style>
    #accordian>ul.show-dropdown>li.active>a,
    #accordian>ul>li>ul.show-dropdown>li.active>a,
    #accordian>ul>li>ul>li>ul.show-dropdown>li.active>a,
    #accordian>ul>li>ul>li>ul>li>ul.show-dropdown>li.active>a,
    #accordian>ul>li>ul>li>ul>li>ul>li>ul.show-dropdown>li.active>a{
      background-color: #edf5fc;
        color: #0089ff;
        box-shadow: 0px 1px 2px rgba(0, 137, 255, 0.2);
    }

    #accordian a:not(:only-child):after {
      content: "\f105";
        position: absolute;
        right: 10px;
        top: 14px;
        font-size: 15px;
        font-family: "Font Awesome 5 Free";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
        font-weight: 900;
        transition: 0.5s;
    }

    #accordian .active>a:not(:only-child):after {
        transform: rotate(90deg);
    }
  </style>
  @endif
