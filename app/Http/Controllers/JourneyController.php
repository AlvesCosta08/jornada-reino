<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrayerRequest;
use Illuminate\Support\Facades\Validator;

class JourneyController extends Controller
{
    public function start()
    {
        return view('journey.start', [
            'title' => 'Início da Sua Jornada Espiritual'
        ]);
    }
    public function showPrayerForm()
    {
        return view('journey.prayer');
    }
    public function station($id)
    {
        $stations = [
            1 => [
                'title' => 'O Vazio Interior',
                'content' => 'Você já sentiu que falta algo, mesmo quando tudo parece estar bem? Aquele vazio que nada parece preencher...',
                'question' => 'Quando você mais sente esse vazio interior?',
                'options' => [
                    'Nos momentos de solidão e quietude',
                    'Quando alcanço um objetivo e ainda me sinto vazio',
                    'Em meio à multidão, mesmo cercado de pessoas',
                    'Em todos esses momentos'
                ],
                'verse' => '"Ele fez tudo apropriado ao seu tempo. Também pôs no coração do homem o anseio pela eternidade." - Eclesiastes 3:11'
            ],
            2 => [
                'title' => 'A Queda e a Separação',
                'content' => 'Desde o início, Deus criou tudo perfeito. Mas o pecado entrou no mundo e nos separou dEle...',
                'question' => 'O que você acha que causou essa separação?',
                'options' => [
                    'Nossas próprias escolhas e erros',
                    'A desobediência humana desde o princípio',
                    'A influência do mal no mundo',
                    'Ainda estou buscando entender'
                ],
                'verse' => '"Pois todos pecaram e estão destituídos da glória de Deus." - Romanos 3:23'
            ],
            3 => [
                'title' => 'A Luz na Escuridão',
                'content' => 'Mas Deus, em Seu amor infinito, não nos abandonou. Ele enviou Jesus como luz para nossas trevas...',
                'question' => 'O que a luz de Jesus significa para você?',
                'options' => [
                    'Esperança em meio às minhas lutas',
                    'Direção para o caminho certo',
                    'Verdade que liberta e transforma',
                    'Amor que preenche todo vazio'
                ],
                'verse' => '"Eu sou a luz do mundo. Quem me segue, nunca andará em trevas, mas terá a luz da vida." - João 8:12'
            ]
        ];

        if (!isset($stations[$id])) {
            return redirect()->route('journey.start')
                ->with('error', 'Estação não encontrada!');
        }

        $station = $stations[$id];

        return view('journey.station', [
            'station' => $station,
            'stationNumber' => $id,
            'totalStations' => count($stations),
            'title' => $station['title']
        ]);
    }

    public function showFinal()
    {
        return view('journey.final');
    }

    public function storeResponse(Request $request, $id)
    {
        // Validar station_id
        if (!in_array($id, [1, 2, 3])) {
            return redirect()->route('journey.start')->with('error', 'Estação inválida.');
        }

        // Validar opção selecionada
        $request->validate([
            'option_index' => 'required|integer|min:0|max:3',
        ]);

        // Salvar resposta
        $data = [
            'station_id' => $id,
            'option_index' => $request->option_index,
        ];

        // Associar ao usuário logado ou usar session_id para anônimos
        if (auth()->check()) {
            $data['user_id'] = auth()->id();
        } else {
            $data['session_id'] = session()->getId();
        }

        JourneyResponse::create($data);

        // Redirecionar para próxima estação ou final
        $nextStation = $id + 1;
        if ($nextStation <= 3) {
            return redirect()->route('station.show', $nextStation);
        } else {
            return redirect()->route('journey.final');
        }
    }

    public function storePrayerRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'request' => 'required|string|min:5|max:1000',
            'name' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'O pedido de oração deve ter entre 5 e 1000 caracteres.'
            ], 422);
        }

        PrayerRequest::create($request->only(['name', 'email', 'request']));

        return response()->json([
            'success' => true,
            'message' => 'Pedido de oração enviado com sucesso!'
        ]);
    }
}
