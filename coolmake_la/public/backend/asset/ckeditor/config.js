CKEDITOR.editorConfig = function (config) {
    // Cấu hình thanh công cụ
    config.toolbarGroups = [
        { name: 'document', groups: ['mode', 'document', 'doctools'] },
        { name: 'clipboard', groups: ['clipboard', 'undo'] },
        { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
        { name: 'forms', groups: ['forms'] },
        '/',
        { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
        { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
        { name: 'links', groups: ['links'] },
        { name: 'insert', groups: ['insert'] },
        '/',
        { name: 'styles', groups: ['styles'] },
        { name: 'colors', groups: ['colors'] },
        { name: 'tools', groups: ['tools'] },
        { name: 'others', groups: ['others'] },
        { name: 'about', groups: ['about'] },
        { name: 'fontsize', groups: ['FontSize'] } // Thêm nhóm FontSize
    ];

    // Bổ sung plugin liên quan
    config.extraPlugins = 'font';

    // Kích thước chữ tùy chỉnh
    config.fontSize_sizes = '12/12px;14/14px;16/16px;18/18px;20/20px;24/24px;28/28px;32/32px;';
};
