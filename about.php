 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bolder mx-5">About Us</h1>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container">
        <div class="card rounded-0">
            <div class="card-body">
                <p>The design and operation of auto-spare part management systems is very important for automobile sector, Prior relevant 
system could be grouped in two categories. It is aimed to find optimal demand for a given spare parts management system; 
that is, how to determine optimal inventory level in order to reduce cost. This paper attempts to solve a comprehensive 
design problem for a spare part management system. Every automobile sector should proceed systematically and establish an 
effective Spare parts management system.Inventory encompasses all raw materials, work in process,and finished goods 
within the supply chain. ChangingInventory policies can dramatically alter the supply chain‟s efficiency and responsiveness. 
Inventory is an important cross functional driver of supply chain performance. Animportant role that can be satisfied by 
having the productready and available when the customer wants it to reduce the customer waiting time in the service sector. 
Inventoryis held throughout the supply chain in the form of raw materials, work in progress, and finished goods.</p>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-transparent navbar-dark bg-primary')
        if($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark bg-transparent')
        }else{
           $('#topNavBar').addClass('navbar-dark bg-primary')
        }
    });
    $(function(){
        $(document).trigger('scroll')
    })
</script>