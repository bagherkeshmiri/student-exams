function createAdvanceSelect2(element,
                              allowClear = false,
                              hasSearchBox = true,
                              hasTag = false,
                              placeholder = 'لطفا انتخاب کنید', dir = 'rtl') {
    $(element).select2({
        placeholder: placeholder,
        dir: dir,
        allowClear: allowClear,
        tags: hasTag,
        minimumResultsForSearch: (hasSearchBox) ? 5 : Infinity,
    });
}

function createSelect2(element, placeholder) {
    $(element).select2({
        placeholder: placeholder,
        dir: 'rtl',
        allowClear: true,
        tags: false,
        // minimumResultsForSearch: Infinity,
    });
}
