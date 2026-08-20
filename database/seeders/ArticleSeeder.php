<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

final class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['title' => 'Từ dữ liệu phân mảnh đến một nguồn sự thật nhân sự', 'slug' => 'mot-nguon-su-that-nhan-su', 'excerpt' => 'Kiến trúc dữ liệu thống nhất giúp HR, Finance và lãnh đạo cùng nhìn thấy một phiên bản đáng tin cậy của tổ chức.', 'category' => 'HR TRANSFORMATION', 'hero_image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=2000&q=90', 'featured' => true, 'body' => "Khi dữ liệu nhân sự nằm trong nhiều bảng tính và phần mềm rời rạc, doanh nghiệp mất thời gian đối soát trước khi có thể ra quyết định. Một nền tảng thống nhất tạo ra ngôn ngữ chung cho HR, Finance và các đơn vị kinh doanh.\n\nMô hình dữ liệu tốt bắt đầu từ cơ cấu tổ chức, vị trí, quan hệ báo cáo và lịch sử hiệu lực. Mọi giao dịch sau đó—tuyển dụng, công, lương, hiệu suất—đều tham chiếu về cùng nền móng.\n\nKết quả không chỉ là báo cáo nhanh hơn. Doanh nghiệp có thể dự báo nhu cầu nhân lực, kiểm soát ngân sách và phát hiện rủi ro sớm hơn."],
            ['title' => 'Năm chỉ số lãnh đạo nhân sự cần theo dõi', 'slug' => 'nam-chi-so-lanh-dao-nhan-su', 'excerpt' => 'Headcount, turnover, time-to-fill, absenteeism và people cost trở nên hữu ích khi được đặt trong đúng bối cảnh.', 'category' => 'PEOPLE ANALYTICS', 'hero_image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1600&q=85', 'featured' => false, 'body' => "Một dashboard tốt không cố gắng hiển thị mọi con số. Nó tập trung vào các tín hiệu liên quan trực tiếp đến mục tiêu kinh doanh và cho phép người xem đi từ tổng quan đến nguyên nhân.\n\nHeadcount cần được so với định biên; turnover cần phân tách tự nguyện, không tự nguyện và nhóm nhân tài; people cost cần đặt cạnh doanh thu hoặc lợi nhuận. Bối cảnh biến số liệu thành quyết định."],
            ['title' => 'Thiết kế trải nghiệm onboarding 30 ngày đầu', 'slug' => 'onboarding-30-ngay-dau', 'excerpt' => 'Một hành trình có cấu trúc giúp nhân viên mới sớm kết nối, hiểu vai trò và tạo ra giá trị.', 'category' => 'EMPLOYEE EXPERIENCE', 'hero_image' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1600&q=85', 'featured' => false, 'body' => "Onboarding bắt đầu trước ngày làm việc đầu tiên. Hồ sơ điện tử, thiết bị, tài khoản và lịch hội nhập cần sẵn sàng để nhân viên mới cảm nhận được sự chuyên nghiệp.\n\nTrong 30 ngày đầu, checklist nên kết nối HR, IT, hành chính, quản lý và buddy. Mục tiêu thử việc rõ ràng cùng các điểm chạm phản hồi giúp phát hiện trở ngại trước khi chúng trở thành lý do nghỉ việc."],
            ['title' => 'Payroll hiện đại: chính xác, giải thích được và bảo mật', 'slug' => 'payroll-hien-dai', 'excerpt' => 'Tính lương không chỉ là công thức; đó là chuỗi kiểm soát dữ liệu, phê duyệt và truy vết.', 'category' => 'CORE HR', 'hero_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1600&q=85', 'featured' => false, 'body' => "Một hệ thống payroll đáng tin cậy phải cho biết mỗi khoản thu nhập và khấu trừ đến từ đâu, dùng phiên bản công thức nào và ai đã phê duyệt.\n\nĐối soát biến động so với kỳ trước, khóa dữ liệu và phân quyền tới từng trường giúp giảm rủi ro. Khi dữ liệu quá khứ thay đổi, cơ chế truy lĩnh phải tạo ra điều chỉnh minh bạch thay vì sửa số liệu đã chốt."],
        ];

        foreach ($items as $index => $item) {
            Article::query()->updateOrCreate(['slug' => $item['slug']], $item + ['author' => 'SCHEMA Research', 'status' => 'published', 'published_at' => now()->subDays(($index + 1) * 4)]);
        }
    }
}
