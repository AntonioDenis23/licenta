package licenta.controller;


import licenta.dto.MsgDto;
import licenta.dto.VoteDto;
import licenta.entity.Candidate;
import licenta.entity.Elections;
import licenta.entity.User;
import licenta.service.CandidateService;
import licenta.service.ElectionsService;
import licenta.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import java.util.Set;

@RestController
public class VotingController {

    @Autowired
    private ElectionsService electionsService;

    @Autowired
    private UserService userService;

    @Autowired
    CandidateService candidateService;

    @PostMapping("vote")
    public ResponseEntity<MsgDto> vote(@RequestParam String userName, @RequestBody VoteDto voteDto) {
        Elections elections = electionsService.findElectionById(voteDto.getElectionId());

        User user = userService.findByUserName(userName);
        Set<Elections> attendedElections = user.getElections();
        MsgDto msg = new MsgDto();
        if (attendedElections.contains(elections)) {

            msg.setMsg("Already Voted!!!!");
            return new ResponseEntity<>(msg, HttpStatus.NOT_ACCEPTABLE);
        }
        user.addElection(elections);
        userService.saveUser(user);
        Candidate candidate = elections.getCandidates().stream().filter(c -> c.getId() == voteDto.getCandidateId()).findFirst().orElse(null);
        if (candidate == null) {
            msg.setMsg("Vote Cancelled!!!!");
            return new ResponseEntity<>(msg, HttpStatus.PARTIAL_CONTENT);
        }
        candidate.increaseVotes();
        candidateService.saveCandidate(candidate);
        msg.setMsg("Already Voted!!!!");
        return ResponseEntity.ok(msg);


    }

}
