// المسار: public/js/app.js

// هنا يمكنك وضع أي أكواد جافا سكريبت عامة تتعلق بالتطبيق

// عندما يتم تحميل الصفحة بالكامل
$(document).ready(function() {
    // أكواد جافا سكريبت هنا
    
    // إظهار رسالة النجاح إذا كانت متاحة
    var successMessage = $('.alert.success');
    if (successMessage.length > 0) {
      alert(successMessage.text());
    }
  });
  
  // يمكنك إضافة المزيد من الدوال والأكواد الجافا سكريبت حسب الحاجة
  