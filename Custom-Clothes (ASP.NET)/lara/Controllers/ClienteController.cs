using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using CustomClothes.Data;

namespace CustomClothes.Controllers
{
    public class ClienteController : Controller
    {
        private readonly ILogger<ClienteController> _logger;
        private readonly DatabaseHelper _databaseHelper;

        public ClienteController(ILogger<ClienteController> logger, DatabaseHelper databaseHelper)
        {
            _logger = logger;
            _databaseHelper = databaseHelper;
        }

        [HttpPost]
        public IActionResult RegistrarCliente(string nome, string email, string senha)
        {
            // Verifica se os dados do cliente são válidos (por exemplo, validação de entrada)
            if (string.IsNullOrEmpty(nome) || string.IsNullOrEmpty(email) || string.IsNullOrEmpty(senha))
            {
                return BadRequest("Dados do cliente inválidos.");
            }

            // Insere o cliente no banco de dados
            bool sucesso = _databaseHelper.InserirCliente(nome, email, senha);
            if (sucesso)
            {
                return Ok("Cliente registrado com sucesso.");
            }
            else
            {
                return StatusCode(500, "Erro ao registrar o cliente. Por favor, tente novamente mais tarde.");
            }
        }
    }
}
