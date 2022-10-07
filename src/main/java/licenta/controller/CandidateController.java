package licenta.controller;

import licenta.dto.CandidateDto;
import licenta.entity.Candidate;
import licenta.mapper.CandidateMapper;
import licenta.service.CandidateService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
public class CandidateController {

    @Autowired
    private CandidateService service;

    @Autowired
    private CandidateMapper candidateMapper;

    @GetMapping("/topics")
    public ResponseEntity<List<CandidateDto>> login() {
        List<Candidate> candidates = service.findAllTopics();
        return ResponseEntity.ok(candidateMapper.CandidateEntityListToCandidateDtoList(candidates));
    }

}
