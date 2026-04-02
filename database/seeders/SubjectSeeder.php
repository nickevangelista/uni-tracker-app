<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prerequisites')->truncate();
        DB::table('subjects')->truncate();

        $subjectsData = [
            // --- 1º SEMESTRE ---
            ['name' => 'Epistemologia', 'credits' => 2, 'hours' => 30, 'semester' => 1, 'prereqs' => [], 'coreqs' => []],
            ['name' => 'Álgebra Linear e Geometria Analítica', 'credits' => 4, 'hours' => 60, 'semester' => 1, 'prereqs' => [], 'coreqs' => []],
            ['name' => 'Algoritmos e Programação I', 'credits' => 4, 'hours' => 60, 'semester' => 1, 'prereqs' => [], 'coreqs' => []],
            ['name' => 'Lógica para Computação', 'credits' => 4, 'hours' => 60, 'semester' => 1, 'prereqs' => [], 'coreqs' => []],
            ['name' => 'Arquitetura de Computadores I', 'credits' => 4, 'hours' => 60, 'semester' => 1, 'prereqs' => [], 'coreqs' => []],
            ['name' => 'Introdução à Engenharia de Computação', 'credits' => 2, 'hours' => 30, 'semester' => 1, 'prereqs' => [], 'coreqs' => []],
            ['name' => 'Matemática para Engenharia', 'credits' => 4, 'hours' => 60, 'semester' => 1, 'prereqs' => [], 'coreqs' => []],

            // --- 2º SEMESTRE ---
            ['name' => 'Física I', 'credits' => 4, 'hours' => 60, 'semester' => 2, 'prereqs' => ['Álgebra Linear e Geometria Analítica', 'Matemática para Engenharia'], 'coreqs' => []],
            ['name' => 'Cálculo I', 'credits' => 4, 'hours' => 60, 'semester' => 2, 'prereqs' => ['Matemática para Engenharia'], 'coreqs' => []],
            ['name' => 'Laboratório de Física I', 'credits' => 2, 'hours' => 30, 'semester' => 2, 'prereqs' => [], 'coreqs' => ['Física I']],
            ['name' => 'Técnicas Digitais', 'credits' => 4, 'hours' => 60, 'semester' => 2, 'prereqs' => ['Arquitetura de Computadores I'], 'coreqs' => []],
            ['name' => 'Arquitetura de Computadores II', 'credits' => 4, 'hours' => 60, 'semester' => 2, 'prereqs' => ['Arquitetura de Computadores I'], 'coreqs' => []],
            ['name' => 'Legislação e Ética', 'credits' => 2, 'hours' => 30, 'semester' => 2, 'prereqs' => [], 'coreqs' => []],
            ['name' => 'Tecnologia, Ambiente e Sociedade', 'credits' => 2, 'hours' => 30, 'semester' => 2, 'prereqs' => [], 'coreqs' => []],
            ['name' => 'Algoritmos e Programação II', 'credits' => 4, 'hours' => 60, 'semester' => 2, 'prereqs' => ['Algoritmos e Programação I'], 'coreqs' => []],

            // --- 3º SEMESTRE ---
            ['name' => 'Física II', 'credits' => 4, 'hours' => 60, 'semester' => 3, 'prereqs' => ['Cálculo I', 'Física I', 'Laboratório de Física I'], 'coreqs' => ['Cálculo II']],
            ['name' => 'Laboratório de Física II', 'credits' => 2, 'hours' => 30, 'semester' => 3, 'prereqs' => [], 'coreqs' => ['Física II']],
            ['name' => 'Metodologia Científica', 'credits' => 2, 'hours' => 30, 'semester' => 3, 'prereqs' => [], 'coreqs' => []],
            ['name' => 'Cálculo II', 'credits' => 4, 'hours' => 60, 'semester' => 3, 'prereqs' => ['Cálculo I', 'Álgebra Linear e Geometria Analítica'], 'coreqs' => []],
            ['name' => 'Sistemas Digitais', 'credits' => 4, 'hours' => 60, 'semester' => 3, 'prereqs' => ['Técnicas Digitais', 'Arquitetura de Computadores II'], 'coreqs' => []],
            ['name' => 'Circuitos Elétricos I', 'credits' => 4, 'hours' => 60, 'semester' => 3, 'prereqs' => ['Cálculo I', 'Álgebra Linear e Geometria Analítica'], 'coreqs' => []],
            ['name' => 'Estrutura de Dados', 'credits' => 4, 'hours' => 60, 'semester' => 3, 'prereqs' => ['Algoritmos e Programação II'], 'coreqs' => []],

            // --- 4º SEMESTRE ---
            ['name' => 'Física III', 'credits' => 4, 'hours' => 60, 'semester' => 4, 'prereqs' => ['Física I', 'Laboratório de Física I', 'Cálculo II'], 'coreqs' => []],
            ['name' => 'Laboratório de Física III', 'credits' => 2, 'hours' => 30, 'semester' => 4, 'prereqs' => [], 'coreqs' => ['Física III']],
            ['name' => 'Circuitos Elétricos II', 'credits' => 4, 'hours' => 60, 'semester' => 4, 'prereqs' => ['Circuitos Elétricos I', 'Física II'], 'coreqs' => ['Cálculo III']],
            ['name' => 'Cálculo III', 'credits' => 4, 'hours' => 60, 'semester' => 4, 'prereqs' => ['Cálculo II'], 'coreqs' => []],
            ['name' => 'Programação de Sistemas', 'credits' => 4, 'hours' => 60, 'semester' => 4, 'prereqs' => ['Estrutura de Dados'], 'coreqs' => []],
            ['name' => 'Engenharia de Software', 'credits' => 4, 'hours' => 60, 'semester' => 4, 'prereqs' => ['Algoritmos e Programação II'], 'coreqs' => []],
            ['name' => 'Organização de Computadores', 'credits' => 4, 'hours' => 60, 'semester' => 4, 'prereqs' => ['Sistemas Digitais'], 'coreqs' => []],
            ['name' => 'Cálculo Vetorial', 'credits' => 4, 'hours' => 60, 'semester' => 4, 'prereqs' => ['Cálculo II'], 'coreqs' => []],

            // --- 5º SEMESTRE ---
            ['name' => 'Física IV', 'credits' => 4, 'hours' => 60, 'semester' => 5, 'prereqs' => ['Física II', 'Física III', 'Laboratório de Física II', 'Laboratório de Física III'], 'coreqs' => []],
            ['name' => 'Cálculo IV', 'credits' => 4, 'hours' => 60, 'semester' => 5, 'prereqs' => ['Cálculo III'], 'coreqs' => []],
            ['name' => 'Eletrônica I', 'credits' => 6, 'hours' => 90, 'semester' => 5, 'prereqs' => ['Circuitos Elétricos II'], 'coreqs' => []],
            ['name' => 'Laboratório de Sistemas Operacionais', 'credits' => 2, 'hours' => 30, 'semester' => 5, 'prereqs' => [], 'coreqs' => ['Sistemas Operacionais']],
            ['name' => 'Sistemas Operacionais', 'credits' => 4, 'hours' => 60, 'semester' => 5, 'prereqs' => ['Arquitetura de Computadores II', 'Estrutura de Dados'], 'coreqs' => []],
            ['name' => 'Qualidade e Testes de Sistemas de Software', 'credits' => 2, 'hours' => 30, 'semester' => 5, 'prereqs' => ['Engenharia de Software'], 'coreqs' => []],
            ['name' => 'Probabilidade e Estatística', 'credits' => 2, 'hours' => 30, 'semester' => 5, 'prereqs' => ['Cálculo II'], 'coreqs' => []],
            ['name' => 'Métodos Numéricos', 'credits' => 4, 'hours' => 60, 'semester' => 5, 'prereqs' => ['Cálculo III', 'Algoritmos e Programação I'], 'coreqs' => []],

            // --- 6º SEMESTRE ---
            ['name' => 'Sistemas e Modelagem', 'credits' => 4, 'hours' => 60, 'semester' => 6, 'prereqs' => ['Cálculo IV', 'Circuitos Elétricos II'], 'coreqs' => []],
            ['name' => 'Eletrônica II', 'credits' => 6, 'hours' => 90, 'semester' => 6, 'prereqs' => ['Eletrônica I'], 'coreqs' => []],
            ['name' => 'Microcontroladores', 'credits' => 4, 'hours' => 60, 'semester' => 6, 'prereqs' => ['Organização de Computadores', 'Eletrônica I'], 'coreqs' => []],
            ['name' => 'Laboratório de Microcontroladores', 'credits' => 2, 'hours' => 30, 'semester' => 6, 'prereqs' => [], 'coreqs' => ['Microcontroladores']],
            ['name' => 'Redes de Computadores', 'credits' => 4, 'hours' => 60, 'semester' => 6, 'prereqs' => ['Sistemas Operacionais', 'Laboratório de Sistemas Operacionais'], 'coreqs' => []],
            ['name' => 'Sistemas de Tempo Real', 'credits' => 4, 'hours' => 60, 'semester' => 6, 'prereqs' => ['Sistemas Operacionais', 'Laboratório de Sistemas Operacionais'], 'coreqs' => []],

            // --- 7º SEMESTRE ---
            ['name' => 'Instrumentação Eletrônica', 'credits' => 4, 'hours' => 60, 'semester' => 7, 'prereqs' => ['Sistemas e Modelagem', 'Probabilidade e Estatística', 'Eletrônica II'], 'coreqs' => []],
            ['name' => 'Barramentos e programação E/S', 'credits' => 4, 'hours' => 60, 'semester' => 7, 'prereqs' => ['Sistemas Operacionais', 'Laboratório de Sistemas Operacionais', 'Microcontroladores'], 'coreqs' => []],
            ['name' => 'Sistemas Distribuídos', 'credits' => 4, 'hours' => 60, 'semester' => 7, 'prereqs' => ['Sistemas Operacionais', 'Laboratório de Sistemas Operacionais'], 'coreqs' => []],
            ['name' => 'Fundamentos de Circuitos Integrados', 'credits' => 4, 'hours' => 60, 'semester' => 7, 'prereqs' => ['Eletrônica II'], 'coreqs' => []],
            ['name' => 'Comunicação de Dados', 'credits' => 4, 'hours' => 60, 'semester' => 7, 'prereqs' => ['Redes de Computadores'], 'coreqs' => []],

            // --- 8º SEMESTRE ---
            ['name' => 'Sistemas de Controle', 'credits' => 4, 'hours' => 60, 'semester' => 8, 'prereqs' => ['Instrumentação Eletrônica'], 'coreqs' => []],
            ['name' => 'Projeto de Sistemas Integrados I', 'credits' => 4, 'hours' => 60, 'semester' => 8, 'prereqs' => ['Fundamentos de Circuitos Integrados'], 'coreqs' => []],
            ['name' => 'Processamento Digital de Sinais', 'credits' => 4, 'hours' => 60, 'semester' => 8, 'prereqs' => ['Cálculo IV'], 'coreqs' => []],
            ['name' => 'Laboratório de Sistemas Integrados I', 'credits' => 2, 'hours' => 30, 'semester' => 8, 'prereqs' => [], 'coreqs' => ['Projeto de Sistemas Integrados I']],

            // --- 9º SEMESTRE ---
            ['name' => 'Trabalho de Conclusão de Curso I', 'credits' => 2, 'hours' => 30, 'semester' => 9, 'prereqs' => [], 'coreqs' => [], 'min_credits' => 200],
            ['name' => 'Testes de Sistemas de Hardware', 'credits' => 2, 'hours' => 30, 'semester' => 9, 'prereqs' => ['Projeto de Sistemas Integrados I'], 'coreqs' => []],
            ['name' => 'Automação', 'credits' => 4, 'hours' => 60, 'semester' => 9, 'prereqs' => ['Instrumentação Eletrônica'], 'coreqs' => []],
            ['name' => 'Gestão e Empreendedorismo', 'credits' => 4, 'hours' => 60, 'semester' => 9, 'prereqs' => ['Engenharia de Software'], 'coreqs' => []],

            // --- 10º SEMESTRE ---
            ['name' => 'Trabalho de Conclusão de Curso II', 'credits' => 2, 'hours' => 30, 'semester' => 10, 'prereqs' => ['Trabalho de Conclusão de Curso I'], 'coreqs' => []],
            ['name' => 'Estágio Profissional Supervisionado', 'credits' => 12, 'hours' => 180, 'semester' => 10, 'prereqs' => [], 'coreqs' => [], 'min_credits' => 200],

            // --- ALGUMAS ELETIVAS COM PRÉ-REQUISITOS ESPECÍFICOS ---
            ['name' => 'Banco de Dados', 'credits' => 4, 'hours' => 60, 'semester' => null, 'type' => 'elective', 'prereqs' => ['Engenharia de Software'], 'coreqs' => []],
            ['name' => 'Linguagens Formais e Automatos', 'credits' => 4, 'hours' => 60, 'semester' => null, 'type' => 'elective', 'prereqs' => ['Teoria da Computação'], 'coreqs' => []], // Cuidado: Teoria da Computação precisa ser cadastrada também se for usar
            ['name' => 'Inteligência Artificial', 'credits' => 4, 'hours' => 60, 'semester' => null, 'type' => 'elective', 'prereqs' => ['Engenharia de Software'], 'coreqs' => []],
            ['name' => 'Aprendizado de Máquina', 'credits' => 4, 'hours' => 60, 'semester' => null, 'type' => 'elective', 'prereqs' => ['Cálculo IV'], 'coreqs' => []],
        ];

        // FASE 1: Criar as matérias
        foreach ($subjectsData as $data) {
            Subject::create([
                'name' => $data['name'],
                'credits' => $data['credits'],
                'hours' => $data['hours'],
                'suggested_semester' => $data['semester'],
                'type' => $data['type'] ?? 'mandatory',
                'minimum_credits_required' => $data['min_credits'] ?? 0,
            ]);
        }

        // FASE 2: Conectar as matérias (Criar as teias de pré e co-requisitos)
        foreach ($subjectsData as $data) {
            $subject = Subject::where('name', $data['name'])->first();

            // Pré-requisitos
            foreach ($data['prereqs'] as $prereqName) {
                $reqSubject = Subject::where('name', $prereqName)->first();
                if ($reqSubject) {
                    DB::table('prerequisites')->insert([
                        'subject_id' => $subject->id,
                        'required_subject_id' => $reqSubject->id,
                        'type' => 'prerequisite'
                    ]);
                }
            }

            // Co-requisitos
            foreach ($data['coreqs'] as $coreqName) {
                $reqSubject = Subject::where('name', $coreqName)->first();
                if ($reqSubject) {
                    DB::table('prerequisites')->insert([
                        'subject_id' => $subject->id,
                        'required_subject_id' => $reqSubject->id,
                        'type' => 'corequisite'
                    ]);
                }
            }
        }
    }
}