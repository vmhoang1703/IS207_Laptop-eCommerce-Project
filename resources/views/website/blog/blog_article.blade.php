<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/blog_article.css') }}">


    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="d-flex flex-column align-items-center" >
    @component("components.header")
    @endcomponent

   <img src="./https_/www.pexels.com/photo/photo-of-woman-wearing-eyeglasses-3184405.png" class="slider container-fluid-xxl row mt-2 "></img>

   <div class=" post-box container-fluid d-flex align-items-center flex-column gap-1 ps-5 pe-5  mt-3">
    @component("components.blog_article_author")
    @endcomponent
        <div class="head-title w-100 text-start mt-4 "> Making smartphones sustainable: Live long and greener</div>
        @component("components.blog_article_style_post")
        @endcomponent
        <div class=" container-xxl container-xl container-lg container-md container-sm    content mt-3 p-pc-3">
            <p >
                Deloitte Global predicts that smartphones—the world’s most popular consumer electronics device, expected to have an installed base of 4.5 billion in 2022—will generate 146 million tons of CO2 or equivalent emissions (CO2e) in 2022. This is less than half a percent of the 34 gigatons of total CO2e emitted globally in 2021, but it is still worth trying to reduce.
                The bulk of these emissions, 83% of the total, will come from the manufacture, shipping, and first-year usage of the 1.4 billion new smartphones forecast to be shipped in 2022.4 Usage-related emissions from the other 3.1 billion smartphones in use during 2022 will generate an additional 11%, and the remainder will come from refurbishing existing smartphones (4%) and end-of-life processes (1%),including recycling.
            </p>
            <h2 class="heading_tag_1 ">Making smartphones is an emissions-laden process</h2>
            <p>
                A brand-new smartphone generates an average of 85 kilograms in emissions in its first year of use. Ninety-five percent of this comes from manufacturing processes, including the extraction of raw materials and shipping. Exactly how much CO2e this releases depends on several factors, mainly:
            </p>
            <ul>
                <li>
                    <p> How much recycled material is used.7 Reusing materials implies a reduction in carbon-intensive mining. Tin can be reused for circuit boards, cobalt for batteries, and aluminum for enclosures.8 Technology now also exists to recycle rare-earth elements, which go into components such as speakers and actuators; up until a few years ago, extracting rare-earth elements from these components was considered commercially unviable due to their small size.9</p>
                </li>
                <li>
                    <p> How energy-efficient manufacturers’ facilities are. The production of the integrated circuits used in smartphones consumes significant amounts of energy. For example, up to 30% of a semiconductor fabrication plant’s operational costs comes from the energy needed to maintain constant temperature and humidity.</p>
                </li>
                <li>
                    <p> How heavily the manufacturing ecosystem relies on renewable energy. This relates to owned facilities as well as to third parties to which vendors outsource manufacturing. Vendors may need to convince and assist their outsourced supply chain to migrate to renewable energy sources such as wind, solar, and hydro.</p>
                </li>
            </ul>
            <p> After it is manufactured, a smartphone generates an average of 8 kilograms of emissions from usage during its working life, which is most commonly between two and five years.12 At the end of that time, its end-of-life CO2e emissions are determined partially by the ease with which its components can be recycled.</p>
            <p>Because manufacturing accounts for almost all of a smartphone’s carbon footprint, the single biggest factor that could reduce a smartphone’s carbon footprint is to extend its expected lifetime.There could still be just as many smartphones in use; what would change is that each smartphone would be used for longer, regardless of the number of individual owners of each smartphone during its lifetime. Even accounting for the CO2e emissions resulting from refurbishing and shipping a used phone, prolonged ownership, whether by the original owner or a series of owners, provides a clear-cut benefit.</p>
            <p>Several trends point to the likelihood that smartphone lifetimes will likely indeed become longer in the medium term:</p>
            <p>Smartphones are becoming physically tougher, reducing the need for unplanned replacement. Screen breakages and water damage have historically been common causes for a phone to be written off. But screens can now cope with multiple short drops, and resilience to being dropped is a point of differentiation.15 And flagship-model smartphones, whose higher sales price enables the use of higher quality, are becoming more resistant to water damage every year. The latest flagships can now survive immersion at up to 6 meters’ depth for half an hour.</p>
            <p>Software support for smartphones is being offered for longer. The period over which a vendor maintains software support has a strong impact on the resale value of a device: It is hard to sell a phone that is unlikely to be useful. To enable older phones to work well, smartphone vendors create or source specific versions of each operating system (OS) for each model of phone. Such an OS refresh may well include design changes that make an existing phone “look” new; updated code can also make existing processes flow better and consume less energy. Vendors also need to provide regular security updates to patch vulnerabilities. As of the start of 2022, the length of this kind of support for a given smartphone’s OS is likely to vary between three and five years, depending on vendor, but we expect that by 2025, competitive pressures may have made five years commonplace for most flagship models.17 In the EU, all smartphone vendors may need to provide security updates for five years beginning in 2023.</p>
            <p>Consumers are keeping phones for longer. The average ownership time for smartphones has steadily been lengthening in developed markets. Figure 1 shows that between 2016 and 2021, there was a decline in the proportion of respondents whose smartphones had been bought in the prior 18 months (the trend reversed in markets in 2021, which we attribute to forced savings on services as a result of the pandemic leading to greater spend on devices). Over the same period and in the same markets, the percentage of smartphones purchased over 3.5 years ago doubled on average from 5% to 10%</p>
        </div>
   </div>

   <div class="heading_tag_1 w-100 ps-5 pe-5  mt-3 text-start">What to read next</div>
   <div class="cart_read w-100 ps-5 pe-5 mb-5 mt-3  row ">
    @component("components.blog_article_cart_post")
    @endcomponent

    @component("components.blog_article_cart_post")
    @endcomponent

    @component("components.blog_article_cart_post")
    @endcomponent
   </div>

   @component("components.footer")
   @endcomponent

   
</body>
</html>