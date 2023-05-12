package licenta.controller;

import licenta.dto.CandidateDto;
import licenta.entity.Candidate;
import licenta.mapper.CandidateMapImpl;
import licenta.mapper.CandidateMapper;
import licenta.service.CandidateService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
public class CandidateController {

    @Autowired
    private CandidateService service;

    @Autowired
    private CandidateMapImpl candidateMapper;

    @GetMapping("/topics")
    public ResponseEntity<List<CandidateDto>> getTopics() {
        List<Candidate> candidates = service.findAllcadidates();
        return ResponseEntity.ok(candidateMapper.CandidateEntityListToCandidateDtoList(candidates));
    }

    @GetMapping("/candidate")
    public ResponseEntity<CandidateDto> getCandidate(@RequestParam Long id) {
        Candidate candidate = service.findCandidate(id);
        return ResponseEntity.ok(candidateMapper.CandidateEntityToCandidateDto(candidate));
    }
    @PostMapping("/addCandidate")
    public void addCandidate(@RequestBody CandidateDto candidateDto) {
        service.saveCandidate(candidateMapper.CandidateDtoToCandidateEntity(candidateDto));
    }

    @PostMapping("/deleteCandidate")
    public void deleteCandidate(@RequestParam String candidateName) {
        service.deleteCandidate(candidateName);
    }
}
