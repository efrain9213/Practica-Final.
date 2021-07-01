función calcularNomina () {
    const salario = parseFloat(documento. getElementById('salario'). valor)
    const dias = parseFloat(documento. getElementById('dias'). valor)
    const tipo = documento. getElementsByName('tipo')
    if (salario > 0 &&&dias  >= 0) {
      let bono = 0
      let isr = 0
      const quincena = salario * dias
      if (tipo[0]. comprobado) {
        bono = salario * 10
        isr = quincena * 0,25
      } más {
        bono = salario * 5
        isr = quincena * 0,15
      }
      si (dias < 15) {
        bono = 0
      }
      const importe = quincena + bono - isr
      documento. getElementById('importe'). valor = importe
    } más {
      si (salario <= 0) {
        ventana. alert('El valor de Salario es incorrecto')
      }
      if (dias < 0) {
        ventana. alert('El valor de Días es incorrecto')
      }
      documento. getElementById('importe'). valor = '0'
    }
  }
  
  función generaOptions () {
    const tipo = documento. getElementsByName('tipo')
    const $depto = documento. querySelector('#depto')
  
    Primero limpia el select
    for (let i = $depto. opciones. longitud; i >= 0; i--) {
      $depto. quitar(i)
    }
    Dependiendo el tipo seleccionado crea las opciones
    if (tipo[0]. comprobado) {
      agregar($depto, 'COM', 'Compras')
      agregar($depto, 'DIR', 'Dirección')
      agregar($depto, 'INF', 'Informática')
      agregar($depto, 'PER', 'Personal')
      agregar($depto, 'VEN', 'Ventas')
    } más {
      agregar($depto, 'MAN', 'Mantenimiento')
      agregar($depto, 'MEN', 'Mensajería')
      agregar($depto, 'SER', 'Servicios')
    }
    calcularNomina()
  }
  
  función agregar ($depto, valor, texto) {
    const opción = documento. createElement('opción')
    opción. valor = valor
    opción. texto = texto
    $depto. appendChild(opción)
  }
