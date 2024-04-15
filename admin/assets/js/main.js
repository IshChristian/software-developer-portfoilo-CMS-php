const navBtn = document.querySelector('.header_collapse-btn');
const nav = document.querySelector('.nav');
const navWrapper = document.querySelector('.navWrapper');
const navClose = document.querySelector('.nav_close');

// Nav
const showOrder = document.querySelector('.nav__showOrders');
const showProducts = document.querySelector('.nav__showProducts');
const navOrdersList = document.querySelector('.nav__orders--items');
const navProductsList = document.querySelector('.nav__products--items');

// Start nav Toggle
navBtn.addEventListener('click', () => {
    //console.log(`object`);
    nav.classList.toggle('show');
    // navWrapper.classList.toggle('show-item');
});

navClose.addEventListener('click', (e) => {
    console.log(e.target.parentElement);
    nav.classList.remove('show');
    // navWrapper.classList.remove('show-item');
});



/*showOrder.addEventListener('click', () => {
    navOrdersList.classList.toggle('show');
});
showProducts.addEventListener('click', () => {
    navProductsList.classList.toggle('show');
});
*/
// End nav Toggle

// Start Toggle Header profile
const toggleProfileNav = document.querySelector('.header_profile');
const showProfileNav = document.querySelector('.header_profile-name--nav');
toggleProfileNav.addEventListener('click', () => {
    showProfileNav.classList.toggle('show');
});
// End Toggle Header profile

// Start Toggle orders filter
/*const showOrderFilter = document.querySelector(
    '.orders__table--filter--listWrapper'
);
const toggleShowOrderFilter = document.querySelector(
    '.orders__table--filter--collapseBtn'
);
toggleShowOrderFilter.addEventListener('click', () => {
    showOrderFilter.classList.toggle('show');
    console.log(`filter orders`);
});*/
// End Toggle orders filter

// Start Toggle abandoned orders filter
/*const showAbandonedOrderFilter = document.querySelector(
    '.abandoned__table--filter--listWrapper'
);
const toggleShowAbandonedOrderFilter = document.querySelector(
    '.abandoned__table--filter--collapseBtn'
);
toggleShowAbandonedOrderFilter.addEventListener('click', () => {
    console.log(`filter abandoned orders`);
    showAbandonedOrderFilter.classList.toggle('show');
});*/
// End Toggle abandoned orders filter

// Start Add/Edit tracking button - Single order page
/*const showAddEditTrackingModal = document.querySelector(
    '.singleOrder__main--modal--addEditTracking'
);
const toggleShowAddEditTrackingModal = document.querySelector(
    '.singleOrder__main--modal--addEditTrackingBtn'
);
const closeShowAddEditTrackingModal = document.querySelectorAll(
    '.singleOrder__main--modal--addEditTracking--closeBtn'
);

toggleShowAddEditTrackingModal.addEventListener('click', () => {
    showAddEditTrackingModal.classList.toggle('show');
});

closeShowAddEditTrackingModal.forEach((btn) => {
    btn.addEventListener('click', () => {
        showAddEditTrackingModal.classList.toggle('show');
    });
});
*/
// End Add/Edit tracking button - Single order page

// Start Capture Payment Btn - Single Order Page
/*const toggleShowCapturePaymentModal = document.querySelector(
    '.singleOrder__main--card--paymentDetails--captureBtn'
);
const closeShowCapturePaymentModal = document.querySelectorAll(
    '.singleOrder__main--modal--close--capturePayment'
);
const showCapturePaymentModal = document.querySelector(
    '.singleOrder__main--modal--capturePayment'
);

toggleShowCapturePaymentModal.addEventListener('click', () => {
    showCapturePaymentModal.classList.toggle('show');
});
closeShowCapturePaymentModal.forEach((btn) => {
    btn.addEventListener('click', () => {
        showCapturePaymentModal.classList.toggle('show');
    });
});
*/
// End Capture Payment Btn

// Variants Input Tags

const variantOptionInput = document.querySelectorAll(
    '.products__create__main--variants--col--optionValues--input'
);
const variantOptionTagsWrapper = document.querySelector(
    '.products__create__main--variants--col--optionValues--wrapper'
);

// variantOptionInput.addEventListener('focus', () => {
//     variantOptionTagsWrapper.style.border = '2px solid #5463c1';
// });
// variantOptionInput.addEventListener('blur', () => {
//     variantOptionTagsWrapper.style.border = '';
// });

variantOptionInput.forEach((input) => {
    input.addEventListener('focus', (e) => {
        e.target.parentElement.parentElement.style.border = '2px solid #5463c1';
    });
});

variantOptionInput.forEach((input) => {
    input.addEventListener('blur', (e) => {
        e.target.parentElement.parentElement.style.border = '';
    });
});

// variantOptionInput.forEach((input) => {
//     input.addEventListener('focus', () => {
//         variantOptionTagsWrapper.style.border = '2px solid #5463c1';
//     });
// });
/*
const chart = document.querySelector("#chart").getContext('2d');

//create a new chart instance
new Chart(chart, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar','Feb','Feb','Feb','Feb','Feb','Feb','Feb'],

        datasets: [
            {
                label: 'Projects',
                data: [22000, 33546, 43546, 53546, 33546, 33546, 33546, 33546, 33546],
                borderColor: 'red',
                borderWidth: 2
            },
            {
                label: 'Services',
                data: [12000, 24546, 32546, 33546, 33546, 33546, 33546, 33546, 33546],
                borderColor: 'blue',
                borderWidth: 2
            }
        ]
    },
    options: {
        responsive: true
    }
})
*/
/*==================== DARK LIGHT THEME ====================*/ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'uil-sun'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx-moon' : 'bx-sun'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'uil-moon' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})




// Start Add/Edit modal button - invoice
const showAddModal = document.querySelector(
    '.main__modal'
);
const toggleShowModal = document.querySelector(
    '.btn__open--modal'
);
const closeShowModal = document.querySelectorAll(
    '.btn__close--modal'
);

toggleShowModal.addEventListener('click', () => {
    showAddModal.classList.toggle('show');
});

closeShowModal.forEach((btn) => {
    btn.addEventListener('click', () => {
        showAddModal.classList.toggle('show');
    });
});

// End Add/Edit modal button - invoice