<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromptsFolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prompt_folders')->insert([
            'title' => "Веб-дизайн",
            'main_image' => '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_691_2876)"><path d="M21.1862 4.73461C21.4438 4.4771 21.6482 4.17136 21.7876 3.83485C21.927 3.49834 21.9988 3.13766 21.9988 2.7734C21.9988 2.40915 21.927 2.04846 21.7876 1.71195C21.6482 1.37544 21.4438 1.0697 21.1862 0.812193C20.6584 0.307681 19.9564 0.026123 19.2263 0.026123C18.4962 0.026123 17.7943 0.307681 17.2665 0.812193L15.0335 3.04703C14.1058 3.97561 12.1708 3.77028 10.8361 3.03511C10.3307 2.7615 9.74339 2.67973 9.18246 2.80489C8.62152 2.93004 8.12469 3.25368 7.78351 3.71618C7.44233 4.17868 7.27976 4.7489 7.32576 5.32178C7.37176 5.89467 7.62323 6.43164 8.03384 6.83378L9.33184 8.13178L1.85642 15.6063C1.36574 16.0917 1.0471 16.7242 0.948973 17.4074C0.850848 18.0907 0.978617 18.7873 1.31284 19.3912L0.268754 20.4353C0.0969053 20.6072 0.000366211 20.8403 0.000366211 21.0834C0.000366211 21.3264 0.0969053 21.5595 0.268754 21.7314C0.440654 21.9033 0.67377 21.9998 0.916837 21.9998C1.1599 21.9998 1.39302 21.9033 1.56492 21.7314L2.609 20.6874C3.21294 21.0216 3.90952 21.1493 4.59275 21.0512C5.27599 20.9531 5.90846 20.6345 6.39392 20.1438L13.8684 12.6684L15.1664 13.9664C15.5686 14.377 16.1055 14.6284 16.6784 14.6744C17.2513 14.7204 17.8215 14.5579 18.284 14.2167C18.7465 13.8755 19.0702 13.3787 19.1953 12.8177C19.3205 12.2568 19.2387 11.6695 18.9651 11.1641C18.2318 9.82944 18.0255 7.89344 18.9532 6.96578L21.1862 4.73461ZM5.09684 18.8476C4.83492 19.0976 4.48677 19.2371 4.12471 19.2371C3.76265 19.2371 3.4145 19.0976 3.15259 18.8476C2.89481 18.5898 2.75001 18.2401 2.75001 17.8755C2.75001 17.5109 2.89481 17.1612 3.15259 16.9034L10.628 9.42886L12.5723 11.3731L5.09684 18.8476ZM17.6552 5.66961C16.0428 7.28203 16.2802 10.0989 17.3573 12.0478C17.4083 12.1495 17.4253 12.2649 17.4057 12.377C17.386 12.4891 17.3308 12.5919 17.2482 12.6702C17.1422 12.7717 17.0012 12.8283 16.8545 12.8283C16.7078 12.8283 16.5667 12.7717 16.4608 12.6702L9.33 5.53761C9.25296 5.45925 9.20063 5.35998 9.17951 5.25214C9.15838 5.14429 9.1694 5.03262 9.21119 4.93098C9.25298 4.82934 9.32369 4.74222 9.41456 4.68042C9.50543 4.61862 9.61245 4.58487 9.72234 4.58336C9.80266 4.58299 9.88179 4.60285 9.95242 4.64111C11.9013 5.71361 14.7191 5.95561 16.3306 4.34319L18.5663 2.10836C18.7447 1.93748 18.9821 1.84208 19.2291 1.84208C19.4761 1.84208 19.7135 1.93748 19.8918 2.10836C19.9791 2.19554 20.0484 2.29906 20.0956 2.41302C20.1428 2.52698 20.1672 2.64913 20.1672 2.77249C20.1672 2.89584 20.1428 3.01799 20.0956 3.13195C20.0484 3.24591 19.9791 3.34943 19.8918 3.43661L17.6552 5.66961Z" fill="white"/></g><defs><clipPath id="clip0_691_2876"><rect width="22" height="22" fill="white"/></clipPath></defs></svg>',
            'is_main' => 1,
            'main_color' => '#FFF',
            'main_background_color' => '#A855F7'
        ]);
        DB::table('prompt_folders')->insert([
            'title' => "Разработка",
            'main_image' => '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_691_2879)"><path d="M17.4167 0.916016H4.58333C3.3682 0.917471 2.20326 1.40082 1.34403 2.26005C0.484808 3.11928 0.00145554 4.28422 0 5.49935L0 12.8327C0.00145554 14.0478 0.484808 15.2128 1.34403 16.072C2.20326 16.9312 3.3682 17.4146 4.58333 17.416H10.0833V19.2493H6.41667C6.17355 19.2493 5.94039 19.3459 5.76849 19.5178C5.59658 19.6897 5.5 19.9229 5.5 20.166C5.5 20.4091 5.59658 20.6423 5.76849 20.8142C5.94039 20.9861 6.17355 21.0827 6.41667 21.0827H15.5833C15.8264 21.0827 16.0596 20.9861 16.2315 20.8142C16.4034 20.6423 16.5 20.4091 16.5 20.166C16.5 19.9229 16.4034 19.6897 16.2315 19.5178C16.0596 19.3459 15.8264 19.2493 15.5833 19.2493H11.9167V17.416H17.4167C18.6318 17.4146 19.7967 16.9312 20.656 16.072C21.5152 15.2128 21.9985 14.0478 22 12.8327V5.49935C21.9985 4.28422 21.5152 3.11928 20.656 2.26005C19.7967 1.40082 18.6318 0.917471 17.4167 0.916016ZM20.1667 12.8327C20.1667 13.562 19.8769 14.2615 19.3612 14.7772C18.8455 15.293 18.146 15.5827 17.4167 15.5827H4.58333C3.85399 15.5827 3.15451 15.293 2.63879 14.7772C2.12306 14.2615 1.83333 13.562 1.83333 12.8327V5.49935C1.83333 4.77 2.12306 4.07053 2.63879 3.55481C3.15451 3.03908 3.85399 2.74935 4.58333 2.74935H17.4167C18.146 2.74935 18.8455 3.03908 19.3612 3.55481C19.8769 4.07053 20.1667 4.77 20.1667 5.49935V12.8327ZM18.3333 9.16602C18.3333 9.40913 18.2368 9.64229 18.0648 9.8142C17.8929 9.9861 17.6598 10.0827 17.4167 10.0827H14.6988L13.1404 12.4248C13.0564 12.5507 12.9426 12.6538 12.809 12.725C12.6754 12.7962 12.5263 12.8332 12.375 12.8327C12.3558 12.8327 12.3365 12.8327 12.3182 12.8327C12.1578 12.8228 12.0028 12.7709 11.8688 12.6823C11.7348 12.5936 11.6264 12.4713 11.5546 12.3276L9.51133 8.23835L8.55433 9.67477C8.4706 9.80027 8.35718 9.90317 8.22413 9.97433C8.09109 10.0455 7.94254 10.0827 7.79167 10.0827H4.58333C4.34022 10.0827 4.10706 9.9861 3.93515 9.8142C3.76324 9.64229 3.66667 9.40913 3.66667 9.16602C3.66667 8.9229 3.76324 8.68974 3.93515 8.51783C4.10706 8.34593 4.34022 8.24935 4.58333 8.24935H7.30125L8.85958 5.90727C8.9478 5.77211 9.07056 5.66302 9.21514 5.59129C9.35972 5.51957 9.52085 5.48782 9.68183 5.49935C9.84221 5.50923 9.99718 5.56109 10.1312 5.64974C10.2652 5.73839 10.3736 5.8607 10.4454 6.00443L12.4887 10.0918L13.4457 8.65543C13.5296 8.53026 13.6431 8.42773 13.7762 8.35689C13.9092 8.28606 14.0576 8.24912 14.2083 8.24935H17.4167C17.6598 8.24935 17.8929 8.34593 18.0648 8.51783C18.2368 8.68974 18.3333 8.9229 18.3333 9.16602Z" fill="#22C55E"/></g><defs><clipPath id="clip0_691_2879"><rect width="22" height="22" fill="white"/></clipPath></defs></svg>',
            'is_main' => 1,
            'main_color' => '#22C55E',
            'main_background_color' => '#102522'
        ]);
        DB::table('prompt_folders')->insert([
            'title' => "Маркетинг",
            'main_image' => '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_691_2883)"><path d="M17.4167 0H11.9167C10.7015 0.00145554 9.5366 0.484808 8.67737 1.34403C7.81814 2.20326 7.33479 3.3682 7.33333 4.58333V4.675C6.29879 4.88775 5.36923 5.45067 4.70132 6.26885C4.03342 7.08704 3.668 8.11048 3.66667 9.16667V9.25833C2.63213 9.47109 1.70257 10.034 1.03466 10.8522C0.366749 11.6704 0.00133331 12.6938 0 13.75L0 17.4167C0.00145554 18.6318 0.484808 19.7967 1.34403 20.656C2.20326 21.5152 3.3682 21.9985 4.58333 22H10.0833C11.2985 21.9985 12.4634 21.5152 13.3226 20.656C14.1819 19.7967 14.6652 18.6318 14.6667 17.4167V17.325C15.7012 17.1122 16.6308 16.5493 17.2987 15.7311C17.9666 14.913 18.332 13.8895 18.3333 12.8333V12.7417C19.3679 12.5289 20.2974 11.966 20.9653 11.1478C21.6333 10.3296 21.9987 9.30619 22 8.25V4.58333C21.9985 3.3682 21.5152 2.20326 20.656 1.34403C19.7967 0.484808 18.6318 0.00145554 17.4167 0V0ZM1.83333 13.75C1.83333 13.0207 2.12306 12.3212 2.63879 11.8055C3.15451 11.2897 3.85399 11 4.58333 11H10.0833C10.5817 11.0013 11.0702 11.1386 11.4964 11.3971C11.9225 11.6555 12.27 12.0253 12.5015 12.4667L9.33442 15.6411L8.899 15.202C8.57441 14.875 8.13818 14.6828 7.6778 14.6639C7.21743 14.645 6.76694 14.8009 6.41667 15.1003L2.18075 18.7303C1.95541 18.3289 1.83586 17.8769 1.83333 17.4167V13.75ZM12.8333 17.4167C12.8333 18.146 12.5436 18.8455 12.0279 19.3612C11.5122 19.8769 10.8127 20.1667 10.0833 20.1667H4.58333C4.23185 20.1659 3.88384 20.0971 3.5585 19.9641L7.59733 16.5L8.03367 16.9409C8.37747 17.2846 8.8437 17.4777 9.32983 17.4777C9.81597 17.4777 10.2822 17.2846 10.626 16.9409L12.8333 14.729V17.4167ZM16.5 12.8333C16.4977 13.4001 16.3203 13.9522 15.9921 14.4143C15.6639 14.8764 15.201 15.2258 14.6667 15.4147V13.75C14.6652 12.5349 14.1819 11.3699 13.3226 10.5107C12.4634 9.65147 11.2985 9.16812 10.0833 9.16667H5.5C5.5 8.43732 5.78973 7.73785 6.30546 7.22212C6.82118 6.7064 7.52065 6.41667 8.25 6.41667H13.75C14.4793 6.41667 15.1788 6.7064 15.6945 7.22212C16.2103 7.73785 16.5 8.43732 16.5 9.16667V12.8333ZM20.1667 8.25C20.1643 8.81674 19.9869 9.36891 19.6588 9.83097C19.3306 10.293 18.8677 10.6424 18.3333 10.8313V9.16667C18.3319 7.95154 17.8485 6.78659 16.9893 5.92737C16.1301 5.06814 14.9651 4.58479 13.75 4.58333H9.16667C9.16667 3.85399 9.4564 3.15451 9.97212 2.63879C10.4878 2.12306 11.1873 1.83333 11.9167 1.83333H17.4167C18.146 1.83333 18.8455 2.12306 19.3612 2.63879C19.8769 3.15451 20.1667 3.85399 20.1667 4.58333V8.25ZM3.66667 13.75C3.66667 13.5687 3.72043 13.3915 3.82115 13.2407C3.92188 13.09 4.06504 12.9725 4.23254 12.9031C4.40004 12.8337 4.58435 12.8156 4.76217 12.8509C4.93998 12.8863 5.10332 12.9736 5.23151 13.1018C5.35971 13.23 5.44702 13.3934 5.48239 13.5712C5.51776 13.749 5.4996 13.9333 5.43022 14.1008C5.36084 14.2683 5.24335 14.4115 5.09261 14.5122C4.94186 14.6129 4.76463 14.6667 4.58333 14.6667C4.34022 14.6667 4.10706 14.5701 3.93515 14.3982C3.76324 14.2263 3.66667 13.9931 3.66667 13.75Z" fill="#EF4444"/></g><defs><clipPath id="clip0_691_2883"><rect width="22" height="22" fill="white"/></clipPath></defs></svg>',
            'is_main' => 1,
            'main_color' => '#EF4444',
            'main_background_color' => '#25181F'
        ]);
        DB::table('prompt_folders')->insert([
            'title' => "Фотографии",
            'main_image' => '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_691_2886)"><path d="M4.58317 12.8333C5.08943 12.8333 5.49983 12.4229 5.49983 11.9167C5.49983 11.4104 5.08943 11 4.58317 11C4.07691 11 3.6665 11.4104 3.6665 11.9167C3.6665 12.4229 4.07691 12.8333 4.58317 12.8333Z" fill="#06B6D4"/><path d="M0.916667 9.16683C1.42293 9.16683 1.83333 8.75642 1.83333 8.25016C1.83333 7.7439 1.42293 7.3335 0.916667 7.3335C0.410406 7.3335 0 7.7439 0 8.25016C0 8.75642 0.410406 9.16683 0.916667 9.16683Z" fill="#06B6D4"/><path d="M4.58317 5.49983C5.08943 5.49983 5.49983 5.08943 5.49983 4.58317C5.49983 4.07691 5.08943 3.6665 4.58317 3.6665C4.07691 3.6665 3.6665 4.07691 3.6665 4.58317C3.6665 5.08943 4.07691 5.49983 4.58317 5.49983Z" fill="#06B6D4"/><path d="M0.916667 1.83333C1.42293 1.83333 1.83333 1.42293 1.83333 0.916667C1.83333 0.410406 1.42293 0 0.916667 0C0.410406 0 0 0.410406 0 0.916667C0 1.42293 0.410406 1.83333 0.916667 1.83333Z" fill="#06B6D4"/><path d="M21.0832 12.8333C21.5894 12.8333 21.9998 12.4229 21.9998 11.9167C21.9998 11.4104 21.5894 11 21.0832 11C20.5769 11 20.1665 11.4104 20.1665 11.9167C20.1665 12.4229 20.5769 12.8333 21.0832 12.8333Z" fill="#06B6D4"/><path d="M17.4167 9.16683C17.9229 9.16683 18.3333 8.75642 18.3333 8.25016C18.3333 7.7439 17.9229 7.3335 17.4167 7.3335C16.9104 7.3335 16.5 7.7439 16.5 8.25016C16.5 8.75642 16.9104 9.16683 17.4167 9.16683Z" fill="#06B6D4"/><path d="M21.0832 5.49983C21.5894 5.49983 21.9998 5.08943 21.9998 4.58317C21.9998 4.07691 21.5894 3.6665 21.0832 3.6665C20.5769 3.6665 20.1665 4.07691 20.1665 4.58317C20.1665 5.08943 20.5769 5.49983 21.0832 5.49983Z" fill="#06B6D4"/><path d="M17.4167 1.83333C17.9229 1.83333 18.3333 1.42293 18.3333 0.916667C18.3333 0.410406 17.9229 0 17.4167 0C16.9104 0 16.5 0.410406 16.5 0.916667C16.5 1.42293 16.9104 1.83333 17.4167 1.83333Z" fill="#06B6D4"/><path d="M12.8332 21.9998C13.3394 21.9998 13.7498 21.5894 13.7498 21.0832C13.7498 20.5769 13.3394 20.1665 12.8332 20.1665C12.3269 20.1665 11.9165 20.5769 11.9165 21.0832C11.9165 21.5894 12.3269 21.9998 12.8332 21.9998Z" fill="#06B6D4"/><path d="M9.16667 18.3333C9.67293 18.3333 10.0833 17.9229 10.0833 17.4167C10.0833 16.9104 9.67293 16.5 9.16667 16.5C8.6604 16.5 8.25 16.9104 8.25 17.4167C8.25 17.9229 8.6604 18.3333 9.16667 18.3333Z" fill="#06B6D4"/><path d="M12.8332 14.6668C13.3394 14.6668 13.7498 14.2564 13.7498 13.7502C13.7498 13.2439 13.3394 12.8335 12.8332 12.8335C12.3269 12.8335 11.9165 13.2439 11.9165 13.7502C11.9165 14.2564 12.3269 14.6668 12.8332 14.6668Z" fill="#06B6D4"/><path d="M9.16667 10.9998C9.67293 10.9998 10.0833 10.5894 10.0833 10.0832C10.0833 9.57691 9.67293 9.1665 9.16667 9.1665C8.6604 9.1665 8.25 9.57691 8.25 10.0832C8.25 10.5894 8.6604 10.9998 9.16667 10.9998Z" fill="#06B6D4"/><path d="M13.7502 2.75C13.2639 2.75 12.7976 2.55685 12.4538 2.21303C12.11 1.86921 11.9168 1.4029 11.9168 0.916667C11.9168 0.673552 11.8202 0.440394 11.6483 0.268485C11.4764 0.0965771 11.2433 0 11.0002 0C10.757 0 10.5239 0.0965771 10.352 0.268485C10.1801 0.440394 10.0835 0.673552 10.0835 0.916667C10.0835 1.4029 9.89034 1.86921 9.54652 2.21303C9.2027 2.55685 8.73639 2.75 8.25016 2.75C8.00705 2.75 7.77389 2.84658 7.60198 3.01849C7.43007 3.19039 7.3335 3.42355 7.3335 3.66667C7.3335 3.90978 7.43007 4.14294 7.60198 4.31485C7.77389 4.48676 8.00705 4.58333 8.25016 4.58333C8.73639 4.58333 9.2027 4.77649 9.54652 5.1203C9.89034 5.46412 10.0835 5.93044 10.0835 6.41667C10.0835 6.65978 10.1801 6.89294 10.352 7.06485C10.5239 7.23676 10.757 7.33333 11.0002 7.33333C11.2433 7.33333 11.4764 7.23676 11.6483 7.06485C11.8202 6.89294 11.9168 6.65978 11.9168 6.41667C11.9168 5.93044 12.11 5.46412 12.4538 5.1203C12.7976 4.77649 13.2639 4.58333 13.7502 4.58333C13.9933 4.58333 14.2264 4.48676 14.3983 4.31485C14.5702 4.14294 14.6668 3.90978 14.6668 3.66667C14.6668 3.42355 14.5702 3.19039 14.3983 3.01849C14.2264 2.84658 13.9933 2.75 13.7502 2.75Z" fill="#06B6D4"/><path d="M6.41667 17.4165C5.93044 17.4165 5.46412 17.2233 5.1203 16.8795C4.77649 16.5357 4.58333 16.0694 4.58333 15.5832C4.58333 15.3401 4.48676 15.1069 4.31485 14.935C4.14294 14.7631 3.90978 14.6665 3.66667 14.6665C3.42355 14.6665 3.19039 14.7631 3.01849 14.935C2.84658 15.1069 2.75 15.3401 2.75 15.5832C2.75 16.0694 2.55685 16.5357 2.21303 16.8795C1.86921 17.2233 1.4029 17.4165 0.916667 17.4165C0.673552 17.4165 0.440394 17.5131 0.268485 17.685C0.0965771 17.8569 0 18.09 0 18.3332C0 18.5763 0.0965771 18.8094 0.268485 18.9813C0.440394 19.1533 0.673552 19.2498 0.916667 19.2498C1.4029 19.2498 1.86921 19.443 2.21303 19.7868C2.55685 20.1306 2.75 20.5969 2.75 21.0832C2.75 21.3263 2.84658 21.5594 3.01849 21.7313C3.19039 21.9032 3.42355 21.9998 3.66667 21.9998C3.90978 21.9998 4.14294 21.9032 4.31485 21.7313C4.48676 21.5594 4.58333 21.3263 4.58333 21.0832C4.58333 20.5969 4.77649 20.1306 5.1203 19.7868C5.46412 19.443 5.93044 19.2498 6.41667 19.2498C6.65978 19.2498 6.89294 19.1533 7.06485 18.9813C7.23676 18.8094 7.33333 18.5763 7.33333 18.3332C7.33333 18.09 7.23676 17.8569 7.06485 17.685C6.89294 17.5131 6.65978 17.4165 6.41667 17.4165Z" fill="#06B6D4"/><path d="M21.0832 17.4165C20.5969 17.4165 20.1306 17.2233 19.7868 16.8795C19.443 16.5357 19.2498 16.0694 19.2498 15.5832C19.2498 15.3401 19.1533 15.1069 18.9813 14.935C18.8094 14.7631 18.5763 14.6665 18.3332 14.6665C18.09 14.6665 17.8569 14.7631 17.685 14.935C17.5131 15.1069 17.4165 15.3401 17.4165 15.5832C17.4165 16.0694 17.2233 16.5357 16.8795 16.8795C16.5357 17.2233 16.0694 17.4165 15.5832 17.4165C15.3401 17.4165 15.1069 17.5131 14.935 17.685C14.7631 17.8569 14.6665 18.09 14.6665 18.3332C14.6665 18.5763 14.7631 18.8094 14.935 18.9813C15.1069 19.1533 15.3401 19.2498 15.5832 19.2498C16.0694 19.2498 16.5357 19.443 16.8795 19.7868C17.2233 20.1306 17.4165 20.5969 17.4165 21.0832C17.4165 21.3263 17.5131 21.5594 17.685 21.7313C17.8569 21.9032 18.09 21.9998 18.3332 21.9998C18.5763 21.9998 18.8094 21.9032 18.9813 21.7313C19.1533 21.5594 19.2498 21.3263 19.2498 21.0832C19.2498 20.5969 19.443 20.1306 19.7868 19.7868C20.1306 19.443 20.5969 19.2498 21.0832 19.2498C21.3263 19.2498 21.5594 19.1533 21.7313 18.9813C21.9032 18.8094 21.9998 18.5763 21.9998 18.3332C21.9998 18.09 21.9032 17.8569 21.7313 17.685C21.5594 17.5131 21.3263 17.4165 21.0832 17.4165Z" fill="#06B6D4"/></g><defs><clipPath id="clip0_691_2886"><rect width="22" height="22" fill="white"/></clipPath></defs></svg>',
            'is_main' => 1,
            'main_color' => '#06B6D4',
            'main_background_color' => '#0E242E'
        ]);
        DB::table('prompt_folders')->insert([
            'title' => "Интерьер",
            'main_image' => '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_691_2890)"><path d="M16.5 17.4165C16.6812 17.4164 16.8584 17.3626 17.0091 17.2619C17.1598 17.1612 17.2773 17.018 17.3467 16.8506C17.416 16.6831 17.4342 16.4988 17.3988 16.321C17.3635 16.1432 17.2762 15.9799 17.1481 15.8517L11.4904 10.195C10.6309 9.33572 9.4653 8.85303 8.24997 8.85303C7.03463 8.85303 5.86905 9.33572 5.00955 10.195L3.01855 12.185C2.85157 12.3579 2.75918 12.5895 2.76127 12.8298C2.76335 13.0702 2.85976 13.3001 3.02972 13.47C3.19967 13.64 3.42958 13.7364 3.66993 13.7385C3.91028 13.7406 4.14183 13.6482 4.31472 13.4812L6.30572 11.4911C6.82933 10.9908 7.52571 10.7115 8.24997 10.7115C8.97423 10.7115 9.6706 10.9908 10.1942 11.4911L15.8519 17.1479C16.0238 17.3198 16.2569 17.4164 16.5 17.4165Z" fill="#F59E0B"/><path d="M14.6668 9.62468C15.3014 9.62468 15.9217 9.43651 16.4493 9.08397C16.9769 8.73144 17.3881 8.23036 17.6309 7.64412C17.8738 7.05787 17.9373 6.41278 17.8135 5.79043C17.6897 5.16807 17.3842 4.5964 16.9355 4.14771C16.4868 3.69902 15.9151 3.39345 15.2927 3.26966C14.6704 3.14586 14.0253 3.2094 13.4391 3.45223C12.8528 3.69506 12.3517 4.10628 11.9992 4.63389C11.6467 5.1615 11.4585 5.78179 11.4585 6.41634C11.4585 7.26725 11.7965 8.0833 12.3982 8.68498C12.9999 9.28666 13.8159 9.62468 14.6668 9.62468ZM14.6668 5.04134C14.9388 5.04134 15.2046 5.12199 15.4307 5.27307C15.6569 5.42416 15.8331 5.6389 15.9372 5.89015C16.0412 6.1414 16.0685 6.41787 16.0154 6.68459C15.9624 6.95132 15.8314 7.19632 15.6391 7.38861C15.4468 7.58091 15.2018 7.71187 14.9351 7.76492C14.6684 7.81798 14.3919 7.79075 14.1406 7.68668C13.8894 7.58261 13.6746 7.40637 13.5236 7.18025C13.3725 6.95413 13.2918 6.68829 13.2918 6.41634C13.2918 6.05167 13.4367 5.70193 13.6946 5.44407C13.9524 5.18621 14.3022 5.04134 14.6668 5.04134Z" fill="#F59E0B"/><path d="M21.0832 14.667C20.84 14.667 20.6069 14.7636 20.435 14.9355C20.2631 15.1074 20.1665 15.3405 20.1665 15.5837V17.417C20.1665 18.1463 19.8768 18.8458 19.361 19.3615C18.8453 19.8773 18.1458 20.167 17.4165 20.167H15.5832C15.3401 20.167 15.1069 20.2636 14.935 20.4355C14.7631 20.6074 14.6665 20.8405 14.6665 21.0836C14.6665 21.3268 14.7631 21.5599 14.935 21.7318C15.1069 21.9037 15.3401 22.0003 15.5832 22.0003H17.4165C18.6316 21.9989 19.7966 21.5155 20.6558 20.6563C21.515 19.7971 21.9984 18.6321 21.9998 17.417V15.5837C21.9998 15.3405 21.9032 15.1074 21.7313 14.9355C21.5594 14.7636 21.3263 14.667 21.0832 14.667Z" fill="#F59E0B"/><path d="M0.916667 7.33333C1.15978 7.33333 1.39294 7.23676 1.56485 7.06485C1.73676 6.89294 1.83333 6.65978 1.83333 6.41667V4.58333C1.83333 3.85399 2.12306 3.15451 2.63879 2.63879C3.15451 2.12306 3.85399 1.83333 4.58333 1.83333H6.41667C6.65978 1.83333 6.89294 1.73676 7.06485 1.56485C7.23676 1.39294 7.33333 1.15978 7.33333 0.916667C7.33333 0.673552 7.23676 0.440394 7.06485 0.268485C6.89294 0.0965771 6.65978 0 6.41667 0L4.58333 0C3.3682 0.00145554 2.20326 0.484808 1.34403 1.34403C0.484808 2.20326 0.00145554 3.3682 0 4.58333L0 6.41667C0 6.65978 0.0965771 6.89294 0.268485 7.06485C0.440394 7.23676 0.673552 7.33333 0.916667 7.33333Z" fill="#F59E0B"/><path d="M6.41667 20.167H4.58333C3.85399 20.167 3.15451 19.8773 2.63879 19.3615C2.12306 18.8458 1.83333 18.1463 1.83333 17.417V15.5837C1.83333 15.3405 1.73676 15.1074 1.56485 14.9355C1.39294 14.7636 1.15978 14.667 0.916667 14.667C0.673552 14.667 0.440394 14.7636 0.268485 14.9355C0.0965771 15.1074 0 15.3405 0 15.5837L0 17.417C0.00145554 18.6321 0.484808 19.7971 1.34403 20.6563C2.20326 21.5155 3.3682 21.9989 4.58333 22.0003H6.41667C6.65978 22.0003 6.89294 21.9037 7.06485 21.7318C7.23676 21.5599 7.33333 21.3268 7.33333 21.0836C7.33333 20.8405 7.23676 20.6074 7.06485 20.4355C6.89294 20.2636 6.65978 20.167 6.41667 20.167Z" fill="#F59E0B"/><path d="M17.4165 0H15.5832C15.3401 0 15.1069 0.0965771 14.935 0.268485C14.7631 0.440394 14.6665 0.673552 14.6665 0.916667C14.6665 1.15978 14.7631 1.39294 14.935 1.56485C15.1069 1.73676 15.3401 1.83333 15.5832 1.83333H17.4165C18.1458 1.83333 18.8453 2.12306 19.361 2.63879C19.8768 3.15451 20.1665 3.85399 20.1665 4.58333V6.41667C20.1665 6.65978 20.2631 6.89294 20.435 7.06485C20.6069 7.23676 20.84 7.33333 21.0832 7.33333C21.3263 7.33333 21.5594 7.23676 21.7313 7.06485C21.9032 6.89294 21.9998 6.65978 21.9998 6.41667V4.58333C21.9984 3.3682 21.515 2.20326 20.6558 1.34403C19.7966 0.484808 18.6316 0.00145554 17.4165 0V0Z" fill="#F59E0B"/></g><defs><clipPath id="clip0_691_2890"><rect width="22" height="22" fill="white"/></clipPath></defs></svg>',
            'is_main' => 1,
            'main_color' => '#F59E0B',
            'main_background_color' => '#262119'
        ]);
        DB::table('prompt_folders')->insert([
            'title' => "Иллюстрация",
            'main_image' => '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_691_2893)"><path d="M21.2933 0.706657C20.8601 0.275646 20.2797 0.0246882 19.669 0.00427945C19.0583 -0.0161293 18.4625 0.195526 18.0015 0.596657L5.016 12.0385C2.87558 12.4418 0 13.6344 0 16.1332C0.00169845 17.6887 0.620337 19.1799 1.72018 20.2797C2.82003 21.3796 4.31125 21.9982 5.86667 21.9999C8.36458 21.9999 9.55808 19.1252 9.96142 16.9848L21.406 3.99474C21.8063 3.53392 22.0173 2.93858 21.9963 2.32852C21.9754 1.71846 21.7242 1.13897 21.2933 0.706657ZM9.29592 14.9663L7.03358 12.704L8.8715 11.0842L10.9157 13.1284L9.29592 14.9663ZM5.86667 20.1666C4.79733 20.1654 3.77214 19.74 3.01601 18.9839C2.25988 18.2278 1.83455 17.2026 1.83333 16.1332C1.83333 14.7509 4.25242 14.0368 5.54492 13.8077L8.19225 16.4541C7.96217 17.7475 7.249 20.1666 5.86667 20.1666ZM20.0283 2.78657L12.1303 11.7497L10.2493 9.86966L19.2097 1.97441C19.32 1.87972 19.462 1.83006 19.6072 1.83531C19.7525 1.84056 19.8905 1.90034 19.9937 2.00274C20.097 2.10514 20.1578 2.24266 20.1642 2.38791C20.1706 2.53317 20.1221 2.6755 20.0283 2.78657Z" fill="#2E49D8"/></g><defs><clipPath id="clip0_691_2893"><rect width="22" height="22" fill="white"/></clipPath></defs></svg>',
            'is_main' => 1,
            'main_color' => '#2E49D8',
            'main_background_color' => '#101525'
        ]);
    }
}
