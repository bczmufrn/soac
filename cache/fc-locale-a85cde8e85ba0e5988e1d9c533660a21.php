<?php return array (
  'plugins.auth.ldap.displayName' => 'LDAP',
  'plugins.auth.ldap.description' => 'Este plugin permite a autenticação e sincronização das contas de usuários através de uma fonte de dados externa LDAP.',
  'plugins.auth.ldap.settings' => 'Opções LDAP',
  'plugins.auth.ldap.settings.hostname' => 'Hostname do Servidor',
  'plugins.auth.ldap.settings.hostname.description' => 'Ex., "ldap.example.com", ou "ldaps://ldap.example.com" (para usar SSL)',
  'plugins.auth.ldap.settings.port' => 'Porta do Servidor',
  'plugins.auth.ldap.settings.port.description' => 'Opcional. Padrão é 389 (LDAP) ou 636 (LDAP sobre SSL)',
  'plugins.auth.ldap.settings.basedn' => 'Base DN',
  'plugins.auth.ldap.settings.basedn.description' => 'Ex.: "ou=pessoa,dc=exemplo,dc=com"',
  'plugins.auth.ldap.settings.managerdn' => 'Gerenciador DN',
  'plugins.auth.ldap.settings.managerdn.description' => 'Ex., "cn=Gerenciador,dc=exemplo,dc=com"',
  'plugins.auth.ldap.settings.managerpwd' => 'Senha do Gerenciador',
  'plugins.auth.ldap.settings.managerpwd.description' => 'O gerenciador DN e senha são requeridos apenas se a sincronização da conta/senha do usuário ou a opção de criação de usuário estiverem ativas. Estas opções poderão ser omitidas se o LDAP for usado exclusivamente para autenticação.',
  'plugins.auth.ldap.settings.uid' => 'Atributo do Nome de Conta',
  'plugins.auth.ldap.settings.uid.description' => 'O atributo cujo valor identifique unicamente um objeto de usuário, como um uid ou cn ou sAMAccountName.',
  'plugins.auth.ldap.settings.pwhash' => 'Criptografia de Senha',
  'plugins.auth.ldap.settings.pwhash.description' => 'Formato Hash para senhas gravadas no servidor. Recomendável SSHA (requer PHP >= 4.3.0).',
  'plugins.auth.ldap.settings.saslopt' => 'Opções SASL  (opcional)',
  'plugins.auth.ldap.settings.sasl' => 'Usar SASL em vez de autenticação simples (requer PHP >= 5)',
  'plugins.auth.ldap.settings.saslmech' => 'Mecanismo SASL',
  'plugins.auth.ldap.settings.saslmech.description' => 'Ex., "DIGEST-MD5"',
  'plugins.auth.ldap.settings.saslrealm' => 'Domínio',
  'plugins.auth.ldap.settings.saslauthzid' => 'Autorização ID requerida',
  'plugins.auth.ldap.settings.saslprop' => 'Propriedades de segurança SASL',
); ?>