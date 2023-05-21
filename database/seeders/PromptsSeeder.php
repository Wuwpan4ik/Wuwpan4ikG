<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Веб-дизайнер
        DB::table('prompts')->insert([
            'description' => "Наметьте план улучшения SEO нашего сайта с помощью элементов дизайна страницы, таких как альт-теги изображений, теги заголовков и структуры внутренней перелинковки.",
            'description_en'=> "Outline a plan for improving our website's SEO through on-page design elements, such as image alt tags, header tags, and internal linking structures.",
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите пять современных тенденций веб-дизайна, которые будут наиболее эффективны для привлечения [целевой аудитории], и приведите примеры того, как эти тенденции могут быть включены в дизайн нашего сайта.",
            'description_en'=> 'Suggest five current web design trends that would be most effective in engaging [target audience] and provide examples of how these trends can be incorporated into our website design.',
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создайте схему отзывчивого, визуально привлекательного макета главной страницы для сайта [конкретной отрасли], учитывая удобство пользования и оптимизацию конверсии.",
            'description_en'=> 'Create a wireframe for a responsive, visually appealing homepage layout for a [specific industry] website, considering user experience and conversion optimization.',
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Приведите список из 10 примеров успешных веб-сайтов в [конкретной отрасли/нише], выделив ключевые элементы дизайна, которые способствуют их успеху, и предложите, как эти элементы можно адаптировать для нового дизайна веб-сайта.",
            'description_en'=> 'Provide a list of 10 examples of successful websites in the [specific industry/niche], highlighting the key design elements that contribute to their success, and suggest how these elements can be adapted for a new website design.',
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Определите пять тенденций в типографике, которые подойдут для [целевой аудитории] нашего сайта, и приведите примеры того, как эти шрифты могут быть использованы для улучшения читабельности и эстетики.",
            'description_en'=> "Identify five typography trends that would be suitable for our website's [target audience] and provide examples of how these fonts can be used to enhance readability and aesthetics.",
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите три цветовые схемы для нашего сайта, которые будут вызывать чувство [желаемой эмоции или идентичности бренда], и объясните, как эти цвета будут резонировать с [целевой аудиторией].",
            'description_en'=> 'Suggest three color schemes for our website that would evoke a sense of [desired emotion or brand identity] and explain how these colors would resonate with our [target audience].',
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте список из 10 тенденций и элементов дизайна, которые можно включить в визуально привлекательный и интерактивный веб-сайт для [конкретной отрасли/ниши], сохраняя при этом чистый и незагроможденный вид.",
            'description_en'=> 'Generate a list of 10 design trends and elements that can be incorporated into a visually engaging and interactive website for [specific industry/niche], while maintaining a clean and uncluttered look.',
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте контрольный список основных шагов для создания визуально привлекательного и запоминающегося дизайна сайта, который будет выделяться на фоне конкурентов, уделяя особое внимание уникальным элементам дизайна, последовательности и брендингу.",
            'description_en'=> 'Generate a checklist of essential steps for creating a visually engaging and memorable website design that stands out from competitors, focusing on unique design elements, consistency, and branding.',
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предоставьте пошаговое руководство по созданию привлекательного, отзывчивого навигационного меню для нашего сайта, которое будет интуитивно понятным для [целевой аудитории] и совместимым с различными устройствами.",
            'description_en'=> 'Provide a step-by-step guide on how to create an engaging, responsive navigation menu for our website that would be intuitive for [target audience] and compatible with various devices.',
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте список из 10 тенденций и элементов дизайна, которые можно включить в визуально привлекательный и интерактивный веб-сайт для [конкретной отрасли/ниши], сохраняя при этом чистый и незагроможденный вид.",
            'description_en'=> 'Generate a list of 10 design trends and elements that can be incorporated into a visually engaging and interactive website for [specific industry/niche], while maintaining a clean and uncluttered look.',
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте список из пяти основных принципов дизайна, которые должны быть приоритетными при редизайне нашего сайта, объяснив их важность и то, как они могут улучшить общий пользовательский опыт.",
            'description_en'=> "Create a list of five essential design principles that should be prioritized in our website's redesign, explaining their importance and how they can enhance the overall user experience.",
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Разработайте набор рекомендаций по созданию визуально привлекательных и эффективных призывов к действию на нашем сайте, принимая во внимание принципы дизайна, контраст и размещение.",
            'description_en'=> 'Develop a set of guidelines for creating visually appealing and effective calls-to-action on our website, taking into account design principles, contrast, and placement.',
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предоставьте список из 10 инструментов и ресурсов, которые веб-дизайнеры могут использовать для поиска вдохновения для создания визуально привлекательного и убедительного дизайна веб-сайта, включая дизайнерские блоги, галереи и онлайн-сообщества.",
            'description_en'=> 'Provide a list of 10 tools and resources that web designers can use to find inspiration for visually engaging and compelling website designs, including design blogs, galleries, and online communities.',
            'folder_id'=>"1"
        ]);
        DB::table('prompts')->insert([
            'description' => 'Предложите, пожалуйста, пять инновационных способов разработки привлекательной страницы "О нас" для веб-сайта в [конкретной отрасли/нише], включающей мультимедийные элементы, такие как изображения, видео и интерактивный контент, чтобы рассказать убедительную историю бренда.',
            'description_en'=> "Please suggest five innovative ways to design an engaging 'About Us' page for a website in the [specific industry/niche], incorporating multimedia elements such as images, videos, and interactive content to tell a compelling brand story.",
            'folder_id'=>"1"
        ]);
        //Разработчик продукта
        DB::table('prompts')->insert([
            'description' => "Составьте список из 10 концепций инновационных продуктов для [целевой отрасли], которые удовлетворяют потребности и болевые точки [целевой аудитории], используя передовые технологии или принципы дизайна.",
            'description_en'=> 'Generate a list of 10 innovative product concepts for [target industry] that address the needs and pain points of [target audience], incorporating cutting-edge technologies or design principles.',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Разработайте 8 методов создания и анализа пользовательских персон, которые точно представляют разнообразные потребности и характеристики [целевой аудитории] для [категории продукта].",
            'description_en'=> 'Develop 8 techniques for creating and analyzing user personas that accurately represent the diverse needs and characteristics of [target audience] for a [product category].',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Разработайте 8 стратегий эффективного донесения важности доступности и инклюзивности до заинтересованных сторон и членов команды, способствующих формированию культуры сопереживания и осознания в процессе проектирования продукта для [категории продукта].",
            'description_en'=> 'Develop 8 strategies for effectively communicating the importance of accessibility and inclusivity to stakeholders and team members, fostering a culture of empathy and awareness within the product design process for [product category].',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте список из 10 уникальных названий продуктов для [тип продукта], которые резонируют с [целевая аудитория], фокусируясь на вызове эмоций или решении конкретной проблемы.",
            'description_en'=> 'Generate a list of 10 unique product names for a [type of product] that resonate with [target audience], focusing on evoking emotions or solving a specific problem.',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте список из 8 названий продуктов для [типа продукта], которые используют аллитерацию или рифму, чтобы сделать их запоминающимися и легкими для [целевой аудитории].",
            'description_en'=> 'Create a list of 8 product names for a [type of product] that utilize alliteration or rhyming to make them catchy and easy to remember for [target audience].',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Представьте список из 7 распространенных проблем юзабилити, с которыми сталкиваются пользователи в интерфейсах [категория продукта], и порекомендуйте дизайнерские решения для улучшения общего пользовательского опыта для [целевая аудитория].",
            'description_en'=> 'Provide a list of 7 common usability issues faced by users in [product category] interfaces, and recommend design solutions to improve the overall user experience for [target audience].',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите 10 способов оптимизации процесса знакомства пользователей с [категория продукта], чтобы [целевая аудитория] могла быстро и легко научиться эффективно использовать продукт.",
            'description_en'=> 'Suggest 10 ways to optimize the user onboarding process for a [product category], ensuring that [target audience] can quickly and easily learn how to use the product effectively.',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Проведите мозговой штурм 10 элементов дизайна или функций, которые можно включить в интерфейс [категория продукта], чтобы повысить его удобство и доступность для [целевой аудитории].",
            'description_en'=> 'Brainstorm 10 design elements or features that can be incorporated into the interface of a [product category] to enhance its usability and accessibility for [target audience].',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите 5 советов по включению обратной связи и тестирования пользователей в процесс разработки интерфейса [категория продукта], чтобы конечный продукт отвечал потребностям и ожиданиям [целевая аудитория].",
            'description_en'=> 'Brainstorm 5 tips for incorporating user feedback and testing into the interface design process for a [product category], ensuring that the final product meets the needs and expectations of [target audience].',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите 5 ключевых шагов для проведения эффективного исследования пользователей с целью получения ценной информации о потребностях, предпочтениях и болевых точках [целевой аудитории] для [категории продукта].",
            'description_en'=> 'Suggest 5 key steps for conducting effective user research to gain valuable insights about the needs, preferences, and pain points of [target audience] for a [product category].',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите список из 7 основных вопросов, которые необходимо задать во время интервью с пользователями, чтобы лучше понять мотивы, поведение и ожидания [целевой аудитории] в отношении [категории продукта].",
            'description_en'=> 'Provide a list of 7 essential questions to ask during user interviews to better understand the motivations, behaviors, and expectations of [target audience] in relation to a [product category].',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте список из 5 стратегий проведения наблюдений за пользователями или контекстуальных опросов для более глубокого понимания того, как [целевая аудитория] взаимодействует с [категорией продукта] в своей естественной среде.",
            'description_en'=> 'Generate a list of 5 strategies for conducting user observations or contextual inquiries to gain a deeper understanding of how [target audience] interacts with a [product category] in their natural environment.',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Проведите мозговой штурм 10 советов по разработке и проведению опросов пользователей, которые позволят получить действенные сведения о [целевой аудитории], помогающие обосновать дизайн [категории продукта].",
            'description_en'=> 'Brainstorm 10 tips for designing and conducting user surveys that yield actionable insights about [target audience], helping to inform the design of a [product category].',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предоставьте список из 7 основных вопросов, которые следует задавать во время интервью с пользователями, чтобы лучше понять мотивы, поведение и ожидания [целевой аудитории] в отношении [категории продукта].",
            'description_en'=> 'Provide a list of 7 essential questions to ask during user interviews to better understand the motivations, behaviors, and expectations of [target audience] in relation to a [product category].',
            'folder_id'=>"2"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте список из 5 стратегий проведения наблюдений за пользователями или контекстуальных опросов для получения более глубокого понимания того, как [целевая аудитория] взаимодействует с [категорией продукта] в естественной среде.",
            'description_en'=> 'Generate a list of 5 strategies for conducting user observations or contextual inquiries to gain a deeper understanding of how [target audience] interacts with a [product category] in their natural environment.',
            'folder_id'=>"2"
        ]);
        //Маркетинг
        DB::table('prompts')->insert([
            'description' => "Создайте серию роликов Instagram или видеороликов TikTok с пользовательским контентом, свидетельствами или отзывами нашей [целевой аудитории], отмечая их опыт использования нашего [продукта/услуги] и укрепляя чувство общности.",
            'description_en'=> 'Curate a series of Instagram Reels or TikTok videos featuring user-generated content, testimonials, or reviews from our [target audience], celebrating their experiences with our [product/service] and fostering a sense of community',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Разработайте серию электронных писем, которые помогут [целевой аудитории] решить конкретную задачу или проблему, связанную с нашим [продуктом/услугой], предлагая ценные советы, ресурсы и идеи, тонко рекламируя наш бренд в качестве решения.",
            'description_en'=> 'Develop an email series that guides [target audience] through a specific challenge or problem related to our [product/service], offering valuable tips, resources, and insights while subtly promoting our brand as the solution',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Разработайте техническую статью или электронную книгу, в которой подробно рассматривается конкретный вопрос, тенденция или стратегия, связанная с нашим [продуктом/услугой], предлагая хорошо изученные, основанные на данных выводы, которые утверждают наш бренд в качестве авторитета в данной области.",
            'description_en'=> 'Develop a whitepaper or eBook that dives deep into a specific issue, trend, or strategy related to our [product/service], offering well-researched, data-driven insights that establish our brand as an authority in the field',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создать персонализированную кампанию по электронной почте, которая обращается к [целевой аудитории] по имени и предлагает индивидуальный контент, рекомендации или рекламные акции на основе истории просмотров или покупок, способствуя развитию чувства связи и лояльности.",
            'description_en'=> 'Create a personalized email campaign that addresses [target audience] by name and offers tailored content, recommendations, or promotions based on their browsing or purchase history, fostering a sense of connection and loyalty',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Разработать привлекательные упаковки, этикетки или рекламные материалы, которые демонстрируют индивидуальность, эстетику и ценности нашего бренда, выделяя наш [продукт/услугу] на фоне конкурентов на полках магазинов или онлайн-платформах.",
            'description_en'=> "Design eye-catching packaging, labels, or promotional materials that showcase our brand's personality, aesthetics, and values, while setting our [product/service] apart from competitors on store shelves or online platforms",
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Написать статью в LinkedIn, которая демонстрирует пример того, как наш [продукт/услуга] помог клиенту или заказчику, позиционируя наш бренд как ценного партнера и поставщика решений для [целевой аудитории].",
            'description_en'=> 'Write a LinkedIn article that showcases a case study of how our [product/service] has helped a client or customer, positioning our brand as a valuable partner and solution-provider for [target audience]',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создайте обновление в LinkedIn, в котором обсуждается недавняя отраслевая тенденция или новость, имеющая отношение к нашему [продукту/услуге], позиционируя наш бренд как лидера мысли и приглашая [целевую аудиторию] присоединиться к обсуждению.",
            'description_en'=> 'Create a LinkedIn update discussing a recent industry trend or news item relevant to our [product/service], positioning our brand as a thought leader and inviting [target audience] to join the conversation',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте электронное письмо, объявляющее о запуске нового [продукта/услуги], подчеркивающее его уникальные преимущества и выгоды, а также включающее ограниченный по времени код скидки для [целевой аудитории], чтобы стимулировать немедленное действие",
            'description_en'=> 'Craft an email announcing the launch of a new [product/service], emphasizing its unique selling points and benefits, and including a limited-time discount code for [target audience] to incentivize immediate action',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создайте видеоролик с рассказом о бренде, в котором рассказывается о происхождении, миссии и видении нашей компании, подчеркивается страсть и преданность, стоящие за нашим [продуктом/услугой], и создается эмоциональная связь с [целевой аудиторией].",
            'description_en'=> 'Produce a brand storytelling video that shares the origin, mission, and vision of our company, highlighting the passion and dedication behind our [product/service], and creating an emotional connection with [target audience]',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Разработайте серию тематических исследований, демонстрирующих, как наш [продукт/услуга] помог клиентам или заказчикам преодолеть трудности или достичь своих целей, позиционируя наш бренд как надежного партнера и поставщика решений для [целевой аудитории].",
            'description_en'=> 'Develop a series of case studies showcasing how our [product/service] has helped clients or customers overcome challenges or achieve their goals, positioning our brand as a trusted partner and solution-provider for [target audience]',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Разработайте серию тематических исследований, демонстрирующих, как наш [продукт/услуга] помог клиентам или заказчикам преодолеть трудности или достичь своих целей, позиционируя наш бренд как надежного партнера и поставщика решений для [целевой аудитории].",
            'description_en'=> 'Develop a series of case studies showcasing how our [product/service] has helped clients or customers overcome challenges or achieve their goals, positioning our brand as a trusted partner and solution-provider for [target audience]',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создание серии фирменных шаблонов для социальных сетей, маркетинга по электронной почте и других цифровых точек контакта, включающих наш визуальный стиль и сообщения для обеспечения последовательного и узнаваемого восприятия бренда на всех каналах.",
            'description_en'=> 'Create a series of branded templates for social media, email marketing, and other digital touchpoints, incorporating our visual identity and messaging to ensure a consistent and recognizable brand experience across all channels',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создать серию коротких, развлекательных видео сценок или анимаций, которые передают индивидуальность, юмор или креативность нашего бренда, при этом тонко включая наш [продукт/услугу], побуждая [целевую аудиторию] делиться контентом и взаимодействовать с ним",
            'description_en'=> "Create a series of short, entertaining video skits or animations that convey our brand's personality, humor, or creativity, while subtly incorporating our [product/service], encouraging [target audience] to share and engage with the content",
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Разработать серию интерактивных викторин, оценок или калькуляторов, которые помогут [целевой аудитории] получить представление о собственных проблемах, предпочтениях или целях, при этом тонко рекламируя наш [продукт/услугу] как потенциальное решение.",
            'description_en'=> 'Design a series of interactive quizzes, assessments, or calculators that help [target audience] gain insights into their own challenges, preferences, or goals, while subtly promoting our [product/service] as a potential solution',
            'folder_id'=>"3"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создать пин-код в Pinterest, который демонстрирует визуально потрясающее, ориентированное на образ жизни изображение с нашим [продуктом/услугой], вместе с убедительной подписью, которая вдохновляет [целевую аудиторию] сохранить, поделиться или перейти на наш сайт",
            'description_en'=> 'Design a Pinterest pin that showcases a visually stunning, lifestyle-oriented image featuring our [product/service], along with a compelling caption that inspires [target audience] to save, share, or click through to our website',
            'folder_id'=>"3"
        ]);
        //Фотографы
        DB::table('prompts')->insert([
            'description' => "Составьте список из 10 уникальных тем для портретной фотографии, которые подходят для [демографическая группа клиента, например, семьи, пары или отдельные люди] и подчеркивают их индивидуальность или интересы.",
            'description_en'=> "Generate a list of 10 unique portrait photography themes that are suitable for [client's demographic, e.g., families, couples, or individuals] and highlight their personalities or interests.",
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите список из пяти советов или рекомендаций по композиции портретной фотографии, которые помогут фотографу сделать уникальные и яркие снимки, чтобы они выделялись на фоне конкурентов и находили отклик у целевой аудитории.",
            'description_en'=> "Provide a list of five portrait photography composition tips or guidelines that can help a photographer capture unique and striking images, ensuring they stand out from the competition and resonate with their target audience.",
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите пять интересных и нетрадиционных мест для проведения портретной фотосессии на открытом воздухе, которые будут соответствовать [предпочтениям клиента, например, любителя природы, городского жителя или любителя винтажа].",
            'description_en'=> "Suggest five interesting and unconventional locations for an outdoor portrait photography session that would cater to a [client's specific preference, e.g., nature-loving, urban explorer, or vintage enthusiast] client.",
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Пожалуйста, предоставьте список из пяти креативных идей позирования для портретной фотосессии с участием группы из [количество человек], обеспечивая, чтобы каждая поза демонстрировала связи и отношения между объектами.",
            'description_en'=> "Please provide a list of five creative posing ideas for a portrait photography session involving a group of [number of people], ensuring that each pose showcases the connections and relationships among the subjects.",
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Порекомендуйте пять идей гардероба и стиля, которые дополнят портретную фотосессию, основанную на [конкретной теме или концепции, например, богемной, минималистской или высокомодной] для [демографической группы клиента, например, семьи, пары или отдельного человека].",
            'description_en'=> "Recommend five wardrobe and styling ideas that would complement a portrait photography session based on a [specific theme or concept, e.g., bohemian, minimalist, or high-fashion] for [client's demographic, e.g., family, couple, or individual].",
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите список из 10 реквизитов или аксессуаров, которые можно включить в портретную фотосессию, чтобы придать ей визуальный интерес и усилить аспект повествования, с учетом [конкретной темы, места съемки или предпочтений клиента].",
            'description_en'=> 'Provide a list of 10 props or accessories that can be incorporated into a portrait photography session to add visual interest and enhance the storytelling aspect, tailored to a [specific theme, location, or client preference].',
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите пять техник освещения или установок, которые создадут уникальные и захватывающие эффекты для портретной фотосессии в помещении, принимая во внимание настроение и атмосферу, которую фотограф стремится передать.",
            'description_en'=> 'Suggest five lighting techniques or setups that would create unique and captivating effects for an indoor portrait photography session, taking into consideration the mood and atmosphere the photographer aims to convey.',
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите список из 10 подсказок или вопросов, которые фотограф может использовать во время портретной съемки, чтобы помочь своим объектам расслабиться, почувствовать себя более комфортно и раскрыть перед камерой их истинную индивидуальность.",
            'description_en'=> 'Provide a list of 10 prompts or questions that a photographer can use during a portrait session to help their subjects relax, feel more comfortable, and reveal their true personalities in front of the camera.',
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте список из пяти заданий или подсказок для портретной съемки, которые можно использовать, чтобы вызвать неподдельные эмоции и выражения у объектов съемки во время сессии, что сделает итоговые снимки более захватывающими и интересными.",
            'description_en'=> 'Generate a list of five portrait photography challenges or prompts that can be used to evoke genuine emotions and expressions from the subjects during the session, making the final images more captivating and engaging.',
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите пять техник или фильтров для постобработки, которые могут улучшить и приподнять конечные изображения, полученные в ходе портретной фотосессии, сохраняя при этом целостный и визуально привлекательный стиль всей серии.",
            'description_en'=> 'Suggest five post-processing techniques or filters that can enhance and elevate the final images from a portrait photography session, while maintaining a cohesive and visually appealing style throughout the series.',
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Дайте список из 10 советов о том, как фотографировать пейзажи в условиях тумана или дымки, уделяя особое внимание композиции, экспозиции и созданию чувства глубины и загадочности на снимках.",
            'description_en'=> 'Provide a list of 10 tips on how to photograph landscapes in foggy or misty conditions, focusing on composition, exposure, and creating a sense of depth and mystery in the images.',
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => 'Предложите пять приемов для съемки захватывающих пейзажных фотографий в "золотой час" или "синий час", обеспечивающих оптимальное использование естественного освещения и создающих визуально потрясающую атмосферу.',
            'description_en'=> 'Suggest five techniques for capturing breathtaking landscape photographs during golden hour or blue hour, ensuring optimal use of natural lighting and creating a visually stunning atmosphere.',
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Порекомендуйте пять подходов к съемке динамичных и драматических пейзажей в штормовую или пасмурную погоду, подчеркивая использование облаков, контраста и настроения для создания визуально потрясающих фотографий.",
            'description_en'=> 'Recommend five approaches to capturing dynamic and dramatic landscape images during stormy or overcast weather, highlighting the use of clouds, contrast, and mood to create visually striking photographs.',
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите пять приемов для создания потрясающих пейзажных фотографий с длинной выдержкой в различных погодных условиях, уделяя особое внимание настройкам камеры, использованию фильтров и поиску подходящего объекта или сцены.",
            'description_en'=> 'Suggest five techniques for creating stunning long exposure landscape photographs in various weather conditions, focusing on camera settings, use of filters, and finding the right subject or scene.',
            'folder_id'=>"4"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте список из пяти советов по съемке пейзажей во время дождя или снега, подчеркнув способы защиты фотоаппаратуры, захвата уникальных погодных элементов и извлечения максимальной пользы из сложных условий.",
            'description_en'=> 'Generate a list of five tips for photographing landscapes during rain or snow, emphasizing ways to protect camera gear, capture unique weather elements, and make the most of challenging conditions.',
            'folder_id'=>"4"
        ]);
        //Дизайн интерьера
        DB::table('prompts')->insert([
            'description' => "Помогите мне выбрать мебель, освещение и системы хранения для рабочего пространства клиента с учетом эргономики и функциональности. Дайте рекомендации с учетом высоты рабочего стола, освещения и систем организации для создания комфортной и эффективной рабочей среды.",
            'description_en'=> "Help me select furniture, lighting, and storage solutions for a client's workspace that prioritize ergonomics and functionality. Provide recommendations that take into account desk height, task lighting, and organization systems to create a comfortable and efficient work environment.",
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите гармоничную цветовую палитру для [конкретного типа помещения] с [типом напольного покрытия], учитывающую влияние [количества естественного света] на восприятие цвета. Укажите три основных цвета и два акцентных цвета, которые хорошо сочетаются между собой и улучшают общий дизайн.",
            'description_en'=> 'Suggest a harmonious color palette for a [specific room type] with [type of flooring] that takes into account the effect of [amount of natural light] on color perception. Provide three primary colors and two accent colors that work well together and enhance the overall design.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предоставьте список рекомендаций по мебели, освещению и хранению для создания функционального и эргономичного рабочего пространства для клиента, принимая во внимание такие факторы, как высота стола и освещение рабочего места. Включите предложения по планировке и элементам дизайна, которые способствуют продуктивности и комфорту.",
            'description_en'=> 'Provide a list of furniture, lighting, and storage recommendations for creating a functional and ergonomic workspace for a client, taking into account factors such as desk height and task lighting. Include suggestions for layout and design elements that promote productivity and comfort.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите сочетание мебели, приспособлений и идей планировки для создания эргономичного и функционального рабочего пространства для клиента, учитывая такие факторы, как высота рабочего стола, освещение и решения для хранения. Предложите рекомендации, которые помогут создать комфортную и эффективную рабочую среду.",
            'description_en'=> 'Suggest a combination of furniture, fixtures, and layout ideas that create an ergonomic and functional workspace for a client, considering factors such as desk height, lighting, and storage solutions. Offer recommendations that support a comfortable and efficient work environment.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Помогите мне спроектировать удобное и эргономичное рабочее пространство для клиента, уделяя особое внимание высоте стола, освещению и решениям для хранения. Дайте рекомендации по мебели, светильникам и планировке, которые создадут функциональную и эффективную рабочую среду.",
            'description_en'=> 'Help me design a comfortable and ergonomic workspace for a client, with a focus on desk height, lighting, and storage solutions. Provide recommendations for furniture, fixtures, and layout that create a functional and efficient work environment.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Рассматривая комнату с [конкретный тип мебели] и [тип напольного покрытия], пожалуйста, порекомендуйте цветовую палитру, которая дополнит мебель и улучшит общий дизайн. Включите предложения по цвету стен, обивки и аксессуаров.",
            'description_en'=> 'Considering a room with [specific type of furniture] and [type of flooring], please recommend a color palette that complements the furniture and enhances the overall design. Include suggestions for wall colors, upholstery, and accessories.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Дайте рекомендации по выбору материалов для [конкретного типа помещения] с акцентом на долговечность, визуальную привлекательность и бюджетные соображения. Предложите рекомендации по выбору напольного покрытия, настенных покрытий и материалов для мебели, которые создадут гармоничное и функциональное пространство.",
            'description_en'=> 'Provide guidance on selecting materials for a [specific room type] with an emphasis on durability, visual appeal, and budget considerations. Offer recommendations for flooring, wall coverings, and furniture materials that create a harmonious and functional space.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите комбинацию светильников для [конкретного типа помещения], которая соответствует [размер помещения] и служит нескольким целям, например, [список целей]. Включите варианты рассеянного, целевого и акцентного освещения, которые создадут гармоничное и функциональное пространство.",
            'description_en'=> 'Suggest a combination of lighting fixtures for a [specific room type] that is [room size] and serves multiple purposes, such as [list of purposes]. Include options for ambient, task, and accent lighting that create a cohesive and functional space.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Порекомендуйте различные светильники для [конкретный тип помещения] с [размеры помещения], которые подходят для различных видов деятельности и настроения, например, для отдыха, работы или развлечений. Включите предложения по общему, целевому и акцентному освещению.",
            'description_en'=> 'Recommend a variety of lighting fixtures for a [specific room type] with [room dimensions] that cater to different activities and moods, such as relaxation, work, or entertainment. Include suggestions for general, task, and accent lighting.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Составьте список из пяти цветовых сочетаний, которые создадут гармоничную и привлекательную атмосферу в комнате с [количество естественного света] и [тип напольного покрытия]. Включите идеи цветов стен, тканей и акцентов, которые соответствуют [конкретный стиль дизайна].",
            'description_en'=> 'Generate a list of five color combinations that would create a harmonious and inviting atmosphere in a room with [amount of natural light] and [type of flooring]. Include ideas for wall colors, fabrics, and accents that cater to the [specific design style].',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Порекомендуйте стратегии проектирования эргономичного рабочего пространства для клиента, учитывая такие факторы, как высота стола, освещение и решения для хранения. Предложите мебель, светильники и планировку, которые создадут функциональную и комфортную рабочую среду.",
            'description_en'=> 'Recommend strategies for designing an ergonomic workspace for a client, considering factors such as desk height, lighting, and storage solutions. Offer suggestions for furniture, fixtures, and layout that create a functional and comfortable work environment.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите цветовую схему для [конкретный тип комнаты] с [количество естественного света] и [тип напольного покрытия], учитывая стиль и цвет существующей мебели. Пожалуйста, укажите три основных цвета и два акцентных цвета, которые хорошо сочетаются друг с другом.",
            'description_en'=> 'Suggest a color scheme for a [specific room type] that has [amount of natural light] and [type of flooring], keeping in mind the style and color of the existing furniture. Please provide three primary colors and two accent colors that work well together.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создайте цветовую палитру для [конкретного типа помещения] с [типом напольного покрытия], которая включает в себя [конкретный стиль дизайна] и подходит для помещения с [количеством естественного света]. Предложите цвета стен, текстиля и декоративных элементов.",
            'description_en'=> 'Create a color palette for a [specific room type] with [type of flooring] that incorporates the [specific design style] and is suitable for a space with [amount of natural light]. Provide suggestions for wall colors, textiles, and decorative elements.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Дайте рекомендации по выбору идеальной цветовой схемы для [конкретного типа помещения] с [типом напольного покрытия] и [количеством естественного света], учитывая желаемое настроение и атмосферу. Предложите три основных и два дополнительных цвета, которые дополняют друг друга.",
            'description_en'=> 'Provide guidance on choosing the perfect color scheme for a [specific room type] that has [type of flooring] and [amount of natural light], considering the desired mood and atmosphere. Suggest three primary colors and two secondary colors that complement each other.',
            'folder_id'=>"5"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите цветовую схему для комнаты с [тип напольного покрытия] и [конкретный тип мебели], принимая во внимание влияние [количество естественного света] на общий вид. Пожалуйста, включите рекомендации по цветам краски, текстиля и акцентов.",
            'description_en'=> 'Suggest a color scheme for a room with [type of flooring] and [specific type of furniture], taking into account the effect of [amount of natural light] on the overall appearance. Please include recommendations for paint colors, textiles, and accents.',
            'folder_id'=>"5"
        ]);
        //Иллюстраторы
        DB::table('prompts')->insert([
            'description' => "Создайте дизайн персонажа, который представляет эмоцию или чувство, используя цвета, формы и выражения лица, которые лучше всего передают эту эмоцию",
            'description_en'=> 'Generate a character design that represents an emotion or feeling, using colors, shapes, and facial expressions that best convey that emotion',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Опишите яркую и захватывающую среду, сочетающую элементы шумного городского пейзажа с пышным природным ландшафтом.",
            'description_en'=> 'Describe a vivid and immersive environment that blends elements of a bustling cityscape with a lush, natural landscape',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создайте подводную среду для фантастического города, принимая во внимание уникальные проблемы и адаптацию, необходимые для жизни под водой.",
            'description_en'=> 'Generate an underwater environment for a fantastical city, taking into account unique challenges and adaptations required for life beneath the sea',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предоставьте пошаговое руководство по созданию визуально поразительной ночной сцены, подчеркивая важность контраста, цветовой температуры и источников света",
            'description_en'=> 'Provide a step-by-step guide to creating a visually striking night scene, emphasizing the importance of contrast, color temperature, and light sources',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Развивайте чувство ценности и светотени, рисуя натюрморты с использованием ограниченного диапазона значений, уделяя особое внимание созданию глубины и размерности с помощью света и тени.",
            'description_en'=> 'Develop your sense of value and shading by sketching still life scenes using a limited value range, focusing on creating depth and dimension through light and shadow.',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Опишите уникальную концепцию персонажа, сочетающую элементы фэнтези и научной фантастики, черпая вдохновение в существах или существах, встречающихся в природе или мифологии.",
            'description_en'=> 'Describe a unique character concept that combines elements of fantasy and sci-fi, taking inspiration from creatures or beings found in nature or mythology',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите дизайн персонажа, основанный на смешении двух различных временных периодов, используя одежду, аксессуары и культурные элементы каждой эпохи.",
            'description_en'=> 'Suggest a character design based on a mash-up of two different time periods, incorporating clothing, accessories, and cultural elements from each era',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Разработайте концепцию персонажа для хранителя или защитника волшебного леса, включив в его облик элементы природы и животного мира",
            'description_en'=> 'Craft a character concept for a guardian or protector of a magical forest, incorporating elements of nature and wildlife into their appearance',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Предложите дизайн персонажа для главного героя истории, действие которой происходит в подводном городе, с учетом его окружения, культуры и возможных проблем, с которыми он может столкнуться.",
            'description_en'=> 'Propose a character design for a protagonist in a story set in an underwater city, taking into account their environment, culture, and any potential challenges they may face',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создайте персонажа, представляющего определенный элемент (земля, воздух, огонь, вода), используя цвета, узоры и текстуры для воплощения сущности этого элемента.",
            'description_en'=> 'Design a character that represents a particular element (earth, air, fire, water), using colors, patterns, and textures to embody the essence of that element.',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Разработайте серию концептуальных эскизов для эпической космической оперы, демонстрирующих разнообразные миры, космические корабли и инопланетные виды, населяющие вселенную.",
            'description_en'=> 'Develop a series of concept sketches for an epic space opera, showcasing the diverse worlds, spacecraft, and alien species that populate the universe',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создайте концепцию персонажа, который воплощает дух определенного времени года, используя цвета, узоры и текстуры, отражающие особенности этого времени года.",
            'description_en'=> 'Create a character concept that embodies the spirit of a specific season, using colors, patterns, and textures that reflect the characteristics of that time of year',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Создайте персонажа, вдохновленного известной исторической личностью, переосмыслив его с фантастическим или футуристическим уклоном.",
            'description_en'=> 'Develop a character inspired by a well-known historical figure, reimagining them with a fantasy or futuristic twist',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Представьте себе персонажа, способного общаться с животными, и разработайте его внешний вид, исходя из того, с какими существами он чаще всего общается.",
            'description_en'=> 'Imagine a character who has the ability to communicate with animals, and design their appearance based on the type of creatures they interact with most frequently',
            'folder_id'=>"6"
        ]);
        DB::table('prompts')->insert([
            'description' => "Придумайте дизайн персонажа для изобретателя или ученого, который использует свои творения для решения проблем в мире, вдохновленном стимпанком.",
            'description_en'=> 'Generate a character design for an inventor or scientist who uses their creations to solve problems in a steampunk-inspired world',
            'folder_id'=>"6"
        ]);
    }
}
