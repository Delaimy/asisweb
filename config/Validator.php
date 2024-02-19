<?php
// Clase para la validación de los datos, el objetivo principal de esta es mantener el código limpio y fácil de modificar en caso de que se necesite cambiar el método de validación.
class Validator
{
  // Método para validar el RFC.
  public function validateRFC($rfc)
  {
    if (!preg_match('/^[A-Z]{4}[0-9]{6}[A-Z0-9]{3}$/', $rfc)) {
      throw new Exception('El RFC es invalido');
      return false;
    }
    return;
  }

  // Método para validar el CURP.
  public function validateCURP($curp)
  {
    if (!preg_match('/^[A-Z]{4}[0-9]{6}[HM][A-Z]{6}[0-9]{1}$/', $curp)) {
      throw new Exception('El CURP es invalido');
      return false;
    }
    return;
  }

  // Método para validar el nombre/apellido.
  public function validateName($name)
  {
    if (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{3,100}$/', $name)) {
      throw new Exception('El nombre/apellido es invalido');
      return false;
    }
    return;
  }

  // Método para validar el correo electrónico.
  public function validateEmail($email)
  {
    if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,255}$/', $email)) {
      throw new Exception('El email es invalido');
      return false;
    }
    return;
  }

  // Método para validar el número de teléfono.
  public function validatePhoneNumber($phone_number)
  {
    if (!preg_match('/^[0-9]{10}$/', $phone_number)) {
      throw new Exception('El número de teléfono es invalido');
      return false;
    }
    return;
  }

  // Método para validar la contraseña.
  public function validatePassword($password)
  {
    if (!preg_match('/^.{6,100}$/', $password)) {
      throw new Exception('La contraseña es invalida');
      return false;
    }
    return;
  }

  // Método para validar los datos del formulario de inicio de sesión.
  public function validateLogin($data)
  {
    $this->validateEmail($data['email']);
    $this->validatePassword($data['password']);
    return;
  }

  // Método para validar los datos del formulario de registro.
  public function validateRegister($data)
  {
    $this->validateRFC($data['rfc']);
    $this->validateCURP($data['curp']);
    $this->validateName($data['name']);
    $this->validateEmail($data['email']);
    $this->validatePhoneNumber($data['phone_number']);
    $this->validatePassword($data['password']);
    return;
  }
}
