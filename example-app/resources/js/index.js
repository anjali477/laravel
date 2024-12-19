$(() => {
    $('#form').dxForm({
      items: [{
        itemType: 'group',
        caption: 'Employee Details',
        colCount: 2,
        items: [{
          dataField: 'name',
          editorOptions: {
            disabled: false,
          },
        }, {
          dataField: 'email',
          validationRules: [{
            type: 'required',
            message: 'Position is required',
          }],
        },  {
          dataField: 'date',
          editorType: 'dxDateBox',
          editorOptions: {
            value: null,
            width: '100%',
          },
          validationRules: [{
            type: 'required',
            message: 'Hire date is required',
          }],
        },  {
          colSpan: 2,
          dataField: 'address',
          editorType: 'dxTextArea',
          editorOptions: {
            height: 90,
            maxLength: 200,
          },
        }, {
          dataField: 'Phone',
          editorOptions: {
            mask: '+1 (X00) 000-0000',
            maskRules: { X: /[02-9]/ },
          },
        }],
      }],
    });

    $('#form').dxForm('instance').validate();
  });

