<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Services - RFPMart + USWDS</title>
    <meta name="description" content="Access all city services including permits, utilities, public safety, and community programs. Find the help you need quickly and easily." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <!-- Hero Section -->
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-city-gov.webp');" aria-label="Introduction">
            <div class="grid-container">
                <div class="usa-hero__callout maxw-tablet">
                    <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                        <ul class="usa-breadcrumb__list">
                            <li class="usa-breadcrumb__list-item">
                                <a href="./" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Home</span>
                                </a>
                            </li>
                            <li class="usa-breadcrumb__list-item usa-current" aria-current="page">
                                <span class="text-base-lightest">Services</span>
                            </li>
                        </ul>
                    </nav>
                    <p class="margin-top-0 margin-bottom-0">
                        City of RFPMart
                    </p>
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            City Services
                        </span>
                    </h1>
                    <p>
                        Access permits, pay bills, find resources, and connect with city departments. We're here to help you.
                    </p>
                    <form class="usa-search usa-search--small" role="search" aria-label="Search services">
                        <label class="usa-sr-only" for="service-search-field">Search services</label>
                        <input
                            class="usa-input"
                            id="service-search-field"
                            type="search"
                            name="search"
                            placeholder="Search for a service..." />
                        <button class="usa-button" type="submit">
                            <img
                                src="uswds/dist/img/usa-icons-bg/search--white.svg"
                                class="usa-search__submit-icon"
                                alt="Search" />
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Quick Access Services -->
        <section class="usa-section grid-container">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl margin-top-0">
                    Quick Access
                </h2>
            </div>
            <ul class="usa-card-group grid-row grid-gap-2 flex-justify-center">
                <li class="usa-card tablet:grid-col-4 desktop:grid-col-4">
                    <div class="usa-card__container border-top-105 border-x-0 border-primary shadow-1 text-center">
                        <div class="usa-card__header padding-2">
                            <svg class="usa-icon usa-icon--size-6 text-primary" aria-hidden="true" focusable="false" role="img">
                                <use href="uswds/dist/img/sprite.svg#credit_card"></use>
                            </svg>
                        </div>
                        <div class="usa-card__body padding-x-2 padding-bottom-2">
                            <h3 class="usa-card__heading font-body-md margin-0">Pay Bills</h3>
                            <p class="font-body-2xs text-base margin-top-05 margin-bottom-0">Utilities & taxes</p>
                        </div>
                        <div class="usa-card__footer padding-top-0">
                            <a href="#" class="usa-button usa-button--outline width-full">Access</a>
                        </div>
                    </div>
                </li>

                <li class="usa-card tablet:grid-col-4 desktop:grid-col-4">
                    <div class="usa-card__container border-top-105 border-x-0 border-primary shadow-1 text-center">
                        <div class="usa-card__header padding-2">
                            <svg class="usa-icon usa-icon--size-6 text-primary" aria-hidden="true" focusable="false" role="img">
                                <use href="uswds/dist/img/sprite.svg#verified_user"></use>
                            </svg>
                        </div>
                        <div class="usa-card__body padding-x-2 padding-bottom-2">
                            <h3 class="usa-card__heading font-body-md margin-0">Permits</h3>
                            <p class="font-body-2xs text-base margin-top-05 margin-bottom-0">Building & events</p>
                        </div>
                        <div class="usa-card__footer padding-top-0">
                            <a href="#" class="usa-button usa-button--outline width-full">Apply</a>
                        </div>
                    </div>
                </li>

                <li class="usa-card tablet:grid-col-4 desktop:grid-col-4">
                    <div class="usa-card__container border-top-105 border-x-0 border-primary shadow-1 text-center">
                        <div class="usa-card__header padding-2">
                            <svg class="usa-icon usa-icon--size-6 text-primary" aria-hidden="true" focusable="false" role="img">
                                <use href="uswds/dist/img/sprite.svg#report"></use>
                            </svg>
                        </div>
                        <div class="usa-card__body padding-x-2 padding-bottom-2">
                            <h3 class="usa-card__heading font-body-md margin-0">Report Issue</h3>
                            <p class="font-body-2xs text-base margin-top-05 margin-bottom-0">Roads & utilities</p>
                        </div>
                        <div class="usa-card__footer padding-top-0">
                            <a href="#" class="usa-button usa-button--outline width-full">Report</a>
                        </div>
                    </div>
                </li>

                <li class="usa-card tablet:grid-col-4 desktop:grid-col-4">
                    <div class="usa-card__container border-top-105 border-x-0 border-primary shadow-1 text-center">
                        <div class="usa-card__header padding-2">
                            <svg class="usa-icon usa-icon--size-6 text-primary" aria-hidden="true" focusable="false" role="img">
                                <use href="uswds/dist/img/sprite.svg#local_police"></use>
                            </svg>
                        </div>
                        <div class="usa-card__body padding-x-2 padding-bottom-2">
                            <h3 class="usa-card__heading font-body-md margin-0">Public Safety</h3>
                            <p class="font-body-2xs text-base margin-top-05 margin-bottom-0">Police & fire</p>
                        </div>
                        <div class="usa-card__footer padding-top-0">
                            <a href="departments-public-safety.html" class="usa-button usa-button--outline width-full">View</a>
                        </div>
                    </div>
                </li>

                <li class="usa-card tablet:grid-col-4 desktop:grid-col-4">
                    <div class="usa-card__container border-top-105 border-x-0 border-primary shadow-1 text-center">
                        <div class="usa-card__header padding-2">
                            <svg class="usa-icon usa-icon--size-6 text-primary" aria-hidden="true" focusable="false" role="img">
                                <use href="uswds/dist/img/sprite.svg#delete"></use>
                            </svg>
                        </div>
                        <div class="usa-card__body padding-x-2 padding-bottom-2">
                            <h3 class="usa-card__heading font-body-md margin-0">Trash & Recycling</h3>
                            <p class="font-body-2xs text-base margin-top-05 margin-bottom-0">Schedules & pickup</p>
                        </div>
                        <div class="usa-card__footer padding-top-0">
                            <a href="departments-garbage-recycling.html" class="usa-button usa-button--outline width-full">View</a>
                        </div>
                    </div>
                </li>

                <li class="usa-card tablet:grid-col-4 desktop:grid-col-4">
                    <div class="usa-card__container border-top-105 border-x-0 border-primary shadow-1 text-center">
                        <div class="usa-card__header padding-2">
                            <svg class="usa-icon usa-icon--size-6 text-primary" aria-hidden="true" focusable="false" role="img">
                                <use href="uswds/dist/img/sprite.svg#work"></use>
                            </svg>
                        </div>
                        <div class="usa-card__body padding-x-2 padding-bottom-2">
                            <h3 class="usa-card__heading font-body-md margin-0">Business</h3>
                            <p class="font-body-2xs text-base margin-top-05 margin-bottom-0">Licenses & support</p>
                        </div>
                        <div class="usa-card__footer padding-top-0">
                            <a href="#" class="usa-button usa-button--outline width-full">Explore</a>
                        </div>
                    </div>
                </li>
            </ul>
     
        </section>

        <!-- Service Categories -->
        <section class="usa-section usa-section--dark">
            <div class="grid-container">
                <div class="margin-bottom-4 border-bottom-05">
                    <h2 class="font-heading-xl margin-top-0">
                        Browse Services by Category
                    </h2>
                </div>
                <div class="grid-row grid-gap-4">
                    <!-- Residents -->
                    <div class="tablet:grid-col-6 desktop:grid-col-4 margin-bottom-4">
                        <div class="bg-base-lightest padding-3 radius-md height-full">
                            <div class="display-flex flex-align-center margin-bottom-2">
                                <svg class="usa-icon usa-icon--size-4 text-primary margin-right-1" aria-hidden="true" focusable="false" role="img">
                                    <use href="uswds/dist/img/sprite.svg#people"></use>
                                </svg>
                                <h3 class="font-heading-lg margin-0 text-ink">For Residents</h3>
                            </div>
                            <ul class="usa-list usa-list--unstyled">
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Water & Sewer Services</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Property Tax Information</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Voter Registration</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Parks & Recreation</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Library Services</a>
                                </li>
                                <li class="padding-y-1">
                                    <a href="#" class="usa-link text-ink">Animal Services</a>
                                </li>
                            </ul>
                            <a href="#" class="usa-button usa-button--outline margin-top-2 width-full">View All Resident Services</a>
                        </div>
                    </div>

                    <!-- Business -->
                    <div class="tablet:grid-col-6 desktop:grid-col-4 margin-bottom-4">
                        <div class="bg-base-lightest padding-3 radius-md height-full">
                            <div class="display-flex flex-align-center margin-bottom-2">
                                <svg class="usa-icon usa-icon--size-4 text-primary margin-right-1" aria-hidden="true" focusable="false" role="img">
                                    <use href="uswds/dist/img/sprite.svg#store"></use>
                                </svg>
                                <h3 class="font-heading-lg margin-0 text-ink">For Businesses</h3>
                            </div>
                            <ul class="usa-list usa-list--unstyled">
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Business License Application</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Zoning & Land Use</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="departments-procurements-listing.html" class="usa-link text-ink">City Procurements</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Economic Development</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Commercial Permits</a>
                                </li>
                                <li class="padding-y-1">
                                    <a href="#" class="usa-link text-ink">Small Business Resources</a>
                                </li>
                            </ul>
                            <a href="#" class="usa-button usa-button--outline margin-top-2 width-full">View All Business Services</a>
                        </div>
                    </div>

                    <!-- Visitors -->
                    <div class="tablet:grid-col-6 desktop:grid-col-4 margin-bottom-4">
                        <div class="bg-base-lightest padding-3 radius-md height-full">
                            <div class="display-flex flex-align-center margin-bottom-2">
                                <svg class="usa-icon usa-icon--size-4 text-primary margin-right-1" aria-hidden="true" focusable="false" role="img">
                                    <use href="uswds/dist/img/sprite.svg#directions_car"></use>
                                </svg>
                                <h3 class="font-heading-lg margin-0 text-ink">For Visitors</h3>
                            </div>
                            <ul class="usa-list usa-list--unstyled">
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Parking Information</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Public Transit Maps</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">Tourist Attractions</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="sample-pages-events-grid.html" class="usa-link text-ink">Local Events</a>
                                </li>
                                <li class="padding-y-1 border-bottom-1px border-base-light">
                                    <a href="#" class="usa-link text-ink">City Maps & Guides</a>
                                </li>
                                <li class="padding-y-1">
                                    <a href="sample-pages-contact.html" class="usa-link text-ink">Visitor Center</a>
                                </li>
                            </ul>
                            <a href="#" class="usa-button usa-button--outline margin-top-2 width-full">View All Visitor Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How to Access Services -->
        <section class="usa-section grid-container">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl margin-top-0">
                    How to Access City Services
                </h2>
            </div>
            <div class="grid-row grid-gap-4">
                <div class="tablet:grid-col-12">
                    <ol class="usa-process-list">
                        <li class="usa-process-list__item">
                            <h3 class="usa-process-list__heading">Find the Service You Need</h3>
                            <p class="margin-top-05">
                                Use our search bar or browse categories above to locate the specific service. You can also call our main line at <a href="tel:315-627-3333">(315) 627-3333</a> for assistance.
                            </p>
                        </li>
                        <li class="usa-process-list__item">
                            <h3 class="usa-process-list__heading">Create an Account (If Required)</h3>
                            <p class="margin-top-05">
                                Some services require a city account for online access. <a href="user-create-account.html">Create your free account</a> to pay bills, apply for permits, and track requests online.
                            </p>
                        </li>
                        <li class="usa-process-list__item">
                            <h3 class="usa-process-list__heading">Submit Your Request</h3>
                            <p class="margin-top-05">
                                Complete the necessary forms online, by mail, or in person at City Hall. Required documents vary by service type.
                            </p>
                        </li>
                        <li class="usa-process-list__item">
                            <h3 class="usa-process-list__heading">Track Your Status</h3>
                            <p class="margin-top-05">
                                Log into your account to check the status of permits, service requests, and payments. You'll also receive email notifications for updates.
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Featured Services with Details -->
        <section class="usa-section bg-primary-lighter">
            <div class="grid-container">
                <div class="margin-bottom-4 border-bottom-05">
                    <h2 class="font-heading-xl margin-top-0">
                        Featured Services
                    </h2>
                </div>

                <ul class="usa-card-group grid-row grid-gap-4">
                    <li class="usa-card tablet:grid-col-6 desktop:grid-col-4">
                        <div class="usa-card__container">
                            <div class="usa-card__header">
                                <h3 class="usa-card__heading">
                                    <svg class="usa-icon usa-icon--size-3 text-primary margin-right-05" aria-hidden="true" focusable="false" role="img">
                                        <use href="uswds/dist/img/sprite.svg#construction"></use>
                                    </svg>
                                    Building Permits
                                </h3>
                            </div>
                            <div class="usa-card__body">
                                <p>Apply for residential and commercial building permits online. Track permit status, schedule inspections, and access building codes.</p>
                                <ul class="usa-list">
                                    <li>New construction permits</li>
                                    <li>Renovation & remodeling</li>
                                    <li>Electrical & plumbing</li>
                                </ul>
                            </div>
                            <div class="usa-card__footer">
                                <a href="#" class="usa-button">Apply for Permit</a>
                            </div>
                        </div>
                    </li>

                    <li class="usa-card tablet:grid-col-6 desktop:grid-col-4">
                        <div class="usa-card__container">
                            <div class="usa-card__header">
                                <h3 class="usa-card__heading">
                                    <svg class="usa-icon usa-icon--size-3 text-primary margin-right-05" aria-hidden="true" focusable="false" role="img">
                                        <use href="uswds/dist/img/sprite.svg#water_drop"></use>
                                    </svg>
                                    Utility Services
                                </h3>
                            </div>
                            <div class="usa-card__body">
                                <p>Manage your water, sewer, and trash services. Set up new accounts, pay bills, report issues, and view usage history.</p>
                                <ul class="usa-list">
                                    <li>Start or stop service</li>
                                    <li>Pay utility bills online</li>
                                    <li>Report water leaks</li>
                                </ul>
                            </div>
                            <div class="usa-card__footer">
                                <a href="#" class="usa-button">Manage Utilities</a>
                            </div>
                        </div>
                    </li>

                    <li class="usa-card tablet:grid-col-6 desktop:grid-col-4">
                        <div class="usa-card__container">
                            <div class="usa-card__header">
                                <h3 class="usa-card__heading">
                                    <svg class="usa-icon usa-icon--size-3 text-primary margin-right-05" aria-hidden="true" focusable="false" role="img">
                                        <use href="uswds/dist/img/sprite.svg#directions_bus"></use>
                                    </svg>
                                    Public Transit
                                </h3>
                            </div>
                            <div class="usa-card__body">
                                <p>Plan your trip with city bus routes, schedules, and real-time tracking. Purchase passes and find accessible transportation options.</p>
                                <ul class="usa-list">
                                    <li>Route maps & schedules</li>
                                    <li>Purchase transit passes</li>
                                    <li>Paratransit services</li>
                                </ul>
                            </div>
                            <div class="usa-card__footer">
                                <a href="#" class="usa-button">View Transit Info</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Service FAQs -->
        <section class="usa-section grid-container">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl margin-top-0">
                    Frequently Asked Questions
                </h2>
            </div>

            <div class="usa-accordion usa-accordion--bordered">
                <h3 class="usa-accordion__heading">
                    <button
                        type="button"
                        class="usa-accordion__button"
                        aria-expanded="true"
                        aria-controls="faq-1">
                        How do I pay my utility bill online?
                    </button>
                </h3>
                <div id="faq-1" class="usa-accordion__content usa-prose">
                    <p>You can pay your utility bill by creating an account on our online portal. Once logged in, navigate to "Pay Bills" and enter your account number. We accept credit cards, debit cards, and electronic bank transfers. You can also set up automatic payments for convenience.</p>
                </div>

                <h3 class="usa-accordion__heading">
                    <button
                        type="button"
                        class="usa-accordion__button"
                        aria-expanded="false"
                        aria-controls="faq-2">
                        What do I need to apply for a building permit?
                    </button>
                </h3>
                <div id="faq-2" class="usa-accordion__content usa-prose">
                    <p>Building permit applications require: completed application form, site plans or blueprints, proof of property ownership, contractor license information (if applicable), and the permit fee. Processing times vary based on project complexity. Visit our Building Department page for detailed requirements.</p>
                </div>

                <h3 class="usa-accordion__heading">
                    <button
                        type="button"
                        class="usa-accordion__button"
                        aria-expanded="false"
                        aria-controls="faq-3">
                        How do I report a pothole or road issue?
                    </button>
                </h3>
                <div id="faq-3" class="usa-accordion__content usa-prose">
                    <p>Report road issues through our "Report an Issue" form or call <a href="tel:315-627-3333">(315) 627-3333</a>. Please provide the exact location (street address or nearest intersection), a description of the problem, and photos if possible. Most non-emergency road repairs are addressed within 5-7 business days.</p>
                </div>

                <h3 class="usa-accordion__heading">
                    <button
                        type="button"
                        class="usa-accordion__button"
                        aria-expanded="false"
                        aria-controls="faq-4">
                        What are City Hall hours of operation?
                    </button>
                </h3>
                <div id="faq-4" class="usa-accordion__content usa-prose">
                    <p>City Hall is open Monday through Friday, 8:00 AM to 5:00 PM. We are closed on weekends and federal holidays. Many services are available 24/7 through our online portal. For after-hours emergencies, please call 911 for police, fire, or medical emergencies.</p>
                </div>

                <h3 class="usa-accordion__heading">
                    <button
                        type="button"
                        class="usa-accordion__button"
                        aria-expanded="false"
                        aria-controls="faq-5">
                        How do I get a business license?
                    </button>
                </h3>
                <div id="faq-5" class="usa-accordion__content usa-prose">
                    <p>Business license applications can be submitted online or in person at City Hall. You'll need to provide: business name and structure, owner information, business address, type of business activity, and applicable fees. Processing typically takes 5-10 business days. Some businesses may require additional permits or inspections.</p>
                </div>
            </div>

            <div class="margin-top-4">
                <a href="sample-pages-faq.html" class="usa-link display-flex flex-row flex-align-center">
                    View All FAQs
                    <svg class="usa-icon margin-left-05" aria-hidden="true" focusable="false" role="img">
                        <use href="uswds/dist/img/sprite.svg#arrow_forward"></use>
                    </svg>
                </a>
            </div>
        </section>

        <!-- Contact CTA -->
        <section class="usa-section bg-base-lightest">
            <div class="grid-container">
                <div class="grid-row grid-gap-4 flex-justify-center flex-align-center">
                    <div class="tablet:grid-col-8 text-center">
                        <h2 class="font-heading-xl margin-top-0">Need Help Finding a Service?</h2>
                        <p class="font-body-lg">
                            Our team is here to assist you. Contact us by phone, email, or visit City Hall in person.
                        </p>
                        <div class="display-flex flex-wrap flex-justify-center grid-gap-2">
                            <a href="sample-pages-contact.html" class="usa-button usa-button--big">
                                Contact Us
                            </a>
                            <a href="departments-directory-accordion.html" class="usa-button usa-button--outline usa-button--big">
                                View All Departments
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Emergency Alert Banner -->
        <section class="usa-section padding-y-3 bg-secondary-dark">
            <div class="grid-container">
                <div class="grid-row grid-gap-2 flex-align-center">
                    <div class="grid-col-auto">
                        <svg class="usa-icon usa-icon--size-5 text-white" aria-hidden="true" focusable="false" role="img">
                            <use href="uswds/dist/img/sprite.svg#warning"></use>
                        </svg>
                    </div>
                    <div class="grid-col-fill">
                        <p class="text-white margin-0 font-body-md">
                            <strong>For emergencies, call 911.</strong> For non-emergency city services, call <a href="tel:315-627-3333" class="text-white text-underline">(315) 627-3333</a>.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>
