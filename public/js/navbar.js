let booking = document.querySelector('.booking-dropdown')
let dropdownMenu = document.querySelector('.booking-dropdown-menu')
let dropdownMenuItems = document.querySelector('.booking-dropdown-item')
let hideTimeout;
booking.addEventListener('mouseenter', () => {
    console.log( 'sssssssss');
    dropdownMenu.style.display='block'

        setTimeout(() => {
        
            dropdownMenu.style.opacity = 1
            dropdownMenu.style.transform = 'translateY(0px)'

    }, 10);
})
booking.addEventListener('mouseenter', () => {
    console.log( 'sssssssss');
    dropdownMenu.style.display='block'

        setTimeout(() => {
        
            dropdownMenu.style.opacity = 1
            dropdownMenu.style.transform = 'translateY(0px)'

    }, 10);
})
booking.addEventListener('mouseenter', () => {
    console.log( 'sssssssss');
    dropdownMenu.style.display='block'

        setTimeout(() => {
        
            dropdownMenu.style.opacity = 1
            dropdownMenu.style.transform = 'translateY(0px)'

    }, 10);
})
booking.addEventListener('mouseenter', () => {
    console.log( 'sssssssss');
    dropdownMenu.style.display='block'

        setTimeout(() => {
        
            dropdownMenu.style.opacity = 1
            dropdownMenu.style.transform = 'translateY(0px)'

    }, 10);
})
booking.addEventListener('mouseenter', () => {
    console.log( 'sssssssss');
    dropdownMenu.style.display='block'

        setTimeout(() => {
        
            dropdownMenu.style.opacity = 1
            dropdownMenu.style.transform = 'translateY(0px)'

    }, 10);
})
booking.addEventListener('mouseleave', (e) => {
    dropdownMenu.style.opacity = 0
    dropdownMenu.style.transform = 'translateY(30px)'
 
        hideTimeout = setTimeout(() => {
            dropdownMenu.style.display = 'none';
        }, 500);
    
    
    
})

booking.addEventListener('mouseenter', () => {
    clearTimeout(hideTimeout);
    console.log( 'sssssssss');
    dropdownMenu.style.display='block'

        setTimeout(() => {
        
            dropdownMenu.style.opacity = 1
            dropdownMenu.style.transform = 'translateY(0px)'

    }, 10);
})

// Back to top btn javascript


// Get the button
let mybutton = document.getElementById("back-to-top-btn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
    console.log( 
        'running'
    );
};
window.onload = function () {
    scrollFunction();
};
function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        mybutton.style.display = "flex";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// Back to top btn javascript


// nav btns 
function setActiveNavButton() {
    // Get the current path
    const path = window.location.pathname;

    // Select all nav buttons
    console.log( 'hhhhhhhhhhhhhhhhhhhhhhhhhhh');
    const navButtons = document.querySelectorAll('.nav-btns');

    // Remove 'active' class from all nav buttons
    navButtons.forEach(navItem => {
        navItem.classList.remove('active');
    });
    // Add 'active' class to the corresponding nav button based on the URL path
    navButtons.forEach(navItem => {
        const anchor = navItem.querySelector('a');
        if (anchor.getAttribute('href') === path) {
            navItem.classList.add('active');
        }
    });
}

// Set the active nav button on page load
setActiveNavButton()

// Handle browser back/forward navigation
// nav btns





document.addEventListener('DOMContentLoaded', () => {
    const bookingNavThemeColor = bookingNavColor; // Set your dynamic color here

    document.documentElement.style.setProperty('--booking-nav-theme-color', bookingNavThemeColor);
});

// document.addEventListener('DOMContentLoaded', (event) => {
//     // Select all anchor elements within the .booking-dropdown-menu class
//     const bookingMenuItems = document.querySelectorAll('#navigation-menu .booking-dropdown-menu li a');

//     // Iterate over each selected anchor element
//     bookingMenuItems.forEach(item => {
//         // Add mouseover event listener to change background color on hover
//         item.addEventListener('mouseover', function () {
//             this.style.background = 'linear-gradient(45deg, rgb(13, 0, 255), rgb(142, 232, 255))';
//         });

//         // Add mouseout event listener to revert background color when not hovering
//         item.addEventListener('mouseout', function () {
//             this.style.background = ''; // Reset to original background color
//         });
//     });
// });


// MOBILE NAVBAR
let hamIcon = document.getElementById('ham-icon')
let mobileNav = document.getElementById('mobile-nav')
let bookingDropdown = document.getElementById('booking-dropdown')
let cutBtn = document.getElementById('cut-btn')
const navItems = document.querySelectorAll('#mobile-nav .nav-btns');
hamIcon.addEventListener('click', () => {
    mobileNav.classList.add('show')
    hamIcon.style.opacity = "0"

})
cutBtn.addEventListener('click', () => {

  

    navItems.forEach((item, index) => {
        setTimeout(() => {
            item.classList.remove('animate');
        }, index * 200); // Adjust the delay as needed

    });
    setTimeout(() => {
        
       
        hamIcon.style.opacity = "1"
        mobileNav.classList.remove('show')
        setTimeout(() => {
            mobileNav.style.right = '-1000px'

        }, 600);
    }, 1100);
})
hamIcon.addEventListener('click', function () {
    
mobileNav.style.right='0px'
    navItems.forEach((item, index) => {
        setTimeout(() => {
            item.classList.add('animate');
        }, index * 200); // Adjust the delay as needed
    });

    // Trigger the mobileNav animation after the last li animation
  
});





let show = false;
document.getElementById('booking-dropdown').addEventListener('click', function () {
    const bookingDropdownItems = document.querySelectorAll('#booking-dropdown .booking-dropdown-menu li');
    if (show ==false) {
        
        bookingDropdownItems.forEach((item, index) => {
            item.addEventListener('click', (event) => {
                event.stopPropagation(); // Prevents the event from bubbling up to the parent
                console.log('Child clicked');
            });
        console.log( show);
        setTimeout(() => {
            item.style.top = `${index * 50}px`;
            item.style.paddingLeft = `${index * 10}px`;
            
            item.classList.add('animate');
            
        }, index * 200); // Adjust the delay as needed
        show = true
    });
    }
    else {
        bookingDropdownItems.forEach((item, index) => {
            
            setTimeout(() => {
                item.style.top = `-43px`;
                
                item.classList.remove('animate');
                
            }, index * 200); // Adjust the delay as needed
            show = false
            console.log(show);

        });
 }

});

// MOBILE NAVBAR